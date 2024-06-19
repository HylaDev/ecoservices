<?php
namespace App\Twig;

use App\Service\CartService;
use Twig\Extension\AbstractExtension;
use Twig\Extension\GlobalsInterface;

class CountCart extends AbstractExtension implements GlobalsInterface
{
    private CartService $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function getGlobals(): array
    {
        $carts = $this->cartService->getCart();
        $nbCarts = count($carts);
        return [
            'nbCarts' => $nbCarts,
        ];
    }
}
