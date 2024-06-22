<?php
namespace App\Controller;

use App\Service\StripeService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Service\CartService;

class PaymentController extends AbstractController
{
    private $stripeService;
    private CartService $cartService;

    public function __construct(CartService $cartService,StripeService $stripeService)
    {
        $this->stripeService = $stripeService;
        $this->cartService = $cartService;
    }

    #[Route('/create-payment-intent', name: 'create_payment_intent')]
    public function createPaymentIntent(Request $request): Response
    {
        $amount = $this->cartService->getTotal()*100; 
        $currency = 'eur';

        $paymentIntent = $this->stripeService->createPaymentIntent($amount, $currency);

        // return new JsonResponse([
        //     'clientSecret' => $paymentIntent->client_secret,
        // ]);

        return $this->render('cart/payment.html.twig', [
            'client_secret' => $paymentIntent->client_secret,
            'stripe_public_key' => $_ENV['STRIPE_PUBLIC_KEY']
        ]);
    }

    #[Route('/payment_confirmation', name: 'payment_confirmation')]
    public function confirmPayment(Request $request): Response
    {
        $user = $this->getUser();
        $this->cartService->submitCart($user);
        $this->cartService->clear();
        return $this->render('cart/confirm.html.twig', [
            'controller_name' => 'RequestController',
        ]);
    }
}
