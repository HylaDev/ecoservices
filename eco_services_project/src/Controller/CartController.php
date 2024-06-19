<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Service\CartService;

class CartController extends AbstractController
{
    private CartService $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    #[Route('/cart', name: 'app_cart')]
    public function index(): Response
    {
        $user = $this->getUser();

        if (!$user) {
            return $this->redirectToRoute('app_login');
        }
        $customerRole = $user->getCustomerRole();

        if ($customerRole->getName() !== 'Particulier') {
            $content = $this->renderView('error/access_denied.html.twig');
            return new Response($content, 403);
        }
        $carts = $this->cartService->getCart();
        $total = $this->cartService->getTotal();
        return $this->render('cart/index.html.twig', [
            'carts' => $carts,
            'subtotal' => $total,
            'controller_name' => 'CartController',
        ]);
    }

    #[Route('/add_to_cart', name: 'add_to_cart')]
    public function add_to_cart(Request $request): Response
    {
        $user = $this->getUser();

        if (!$user) {
            return $this->redirectToRoute('app_login');
        }
        $customerRole = $user->getCustomerRole();

        if ($customerRole->getName() !== 'Particulier') {
            $content = $this->renderView('error/access_denied.html.twig');
            return new Response($content, 403);
        }
        $productId = $request->query->getInt('product_id');
        $quantity = $request->query->getInt('quantity');

        $this->cartService->add($productId, $quantity);

        return $this->redirectToRoute('app_cart');
    }

    #[Route('/update_cart', name: 'update_cart')]
    public function update_cart(Request $request): Response
    {
        $user = $this->getUser();

        if (!$user) {
            return $this->redirectToRoute('app_login');
        }
        $customerRole = $user->getCustomerRole();

        if ($customerRole->getName() !== 'Particulier') {
            $content = $this->renderView('error/access_denied.html.twig');
            return new Response($content, 403);
        }
        $productId = $request->query->getInt('product_id');
        $quantity = 1;
        if($request->query->getBoolean('manus')){
            $quantity = -1;
        }

        $this->cartService->update($productId, $quantity);

        return $this->redirectToRoute('app_cart');
    }

    #[Route('/remove_to_cart', name: 'remove_to_cart')]
    public function remove_to_cart(Request $request): Response
    {
        $user = $this->getUser();

        if (!$user) {
            return $this->redirectToRoute('app_login');
        }
        $customerRole = $user->getCustomerRole();

        if ($customerRole->getName() !== 'Particulier') {
            $content = $this->renderView('error/access_denied.html.twig');
            return new Response($content, 403);
        }
        $productId = $request->query->getInt('product_id');

        $this->cartService->remove_to($productId);

        return $this->redirectToRoute('app_cart');
    }
}
