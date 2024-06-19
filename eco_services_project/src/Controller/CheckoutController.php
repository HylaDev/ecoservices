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
        $carts = $this->cartService->getCart();
        return $this->render('checkout/index.html.twig', [
            'carts' => $carts,
            'controller_name' => 'CheckoutController',
        ]);
    }
}
