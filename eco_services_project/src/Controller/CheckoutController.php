<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Service\CartService;

class CheckoutController extends AbstractController
{
    private CartService $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    #[Route('/checkout', name: 'app_checkout')]
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
        return $this->render('checkout/index.html.twig', [
            'carts' => $carts,
            'total' => $total,
            'user' => $user,
            'controller_name' => 'CheckoutController',
        ]);
    }
}
