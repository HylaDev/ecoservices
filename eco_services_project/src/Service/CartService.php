<?php
namespace App\Service;

use App\Entity\CommandDetail;
use App\Entity\Command;
use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\RequestStack;
use Doctrine\ORM\EntityManagerInterface;
use DateTime;

class CartService
{
    private $entityManager;
    private $session;
    private ProductRepository $productRepository;

    public function __construct(EntityManagerInterface $entityManager,RequestStack $requestStack,ProductRepository $productRepository)
    {
        $this->entityManager = $entityManager;
        $this->session = $requestStack->getSession();
        $this->productRepository = $productRepository;
    }

    public function add(int $productId, int $quantity): void
    {
        $cart = $this->session->get('cart', []);
        $product = $this->productRepository->findOneById($productId);

        foreach ($cart as &$item) {
            if ($item->getProduct()->getId() === $productId) {
                $item->setQuantity($item->getQuantity() + $quantity);
                $item->setTotal($product->getPrice() * $item->getQuantity());
                $this->session->set('cart', $cart);
                return;
            }
        }

        $newCart = new CommandDetail(); 
        $newCart->setProduct($product);
        $newCart->setPrice($product->getPrice());
        $newCart->setQuantity($quantity);
        $newCart->setTotal($product->getPrice() * $quantity);
        $cart[] = $newCart;
        $this->session->set('cart', $cart);
    }
    public function update(int $productId, int $quantity): void
    {
        $cart = $this->session->get('cart', []);
        $product = $this->productRepository->findOneById($productId);

        foreach ($cart as $key => &$item) {
            if ($item->getProduct()->getId() === $productId) {
                if($item->getQuantity() + $quantity == 0){
                    unset($cart[$key]);
                    $this->session->set('cart', $cart);
                    return;
                }
                $item->setQuantity($item->getQuantity() + $quantity);
                $item->setTotal($product->getPrice() * $item->getQuantity());
                $this->session->set('cart', $cart);
                return;
            }
        }
    }

    public function remove_to(int $productId): void
    {
        $cart = $this->session->get('cart', []);
        $product = $this->productRepository->findOneById($productId);

        foreach ($cart as $key => &$item) {
            if ($item->getProduct()->getId() === $productId) {
                unset($cart[$key]);
                $this->session->set('cart', $cart);
                return;
            }
        }
    }

    public function getCart(): array
    {
        return $this->session->get('cart', []);
    }

    public function getTotal()
    {
        $cart = $this->session->get('cart', []);
        $total = 0;
        foreach ($cart as &$item) {
            $total = $total + $item->getTotal();
        }
        return $total;
    }

    public function clear(): void
    {
        $this->session->remove('cart');
    }

    public function submitCart($user): void
    {
        $command = new Command();
        $command->setDate(new DateTime());
        $command->setTotal($this->getTotal());
        $command->setCmduser($user);
        $command->setValidity(true);
        
        $this->entityManager->persist($command);

        $carts = $this->session->get('cart', []);

        foreach ($carts as $cart) {
            $product = $this->productRepository->findOneById($cart->getProduct()->getId());
            $cartNew = new CommandDetail();
            $cartNew->setCommand($command);
            $cartNew->setProduct($product);
            $cartNew->setQuantity($cart->getQuantity());
            $cartNew->setPrice($cart->getPrice());
            $cartNew->setTotal($cart->getTotal());
            $this->entityManager->persist($cartNew);
        }

        $this->entityManager->flush();
    }
}
