<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\ProductCategoryRepository;
use App\Repository\ProductRepository;

class ShopController extends AbstractController
{
    #[Route('/shop', name: 'shop')]
    public function index(ProductCategoryRepository $productCategoryRepository,ProductRepository $productRepository): Response
    {
        $categories = $productCategoryRepository->findAll();
        $products = $productRepository->findAll();
        $user = $this->getUser();
        return $this->render('shop/index.html.twig', [
            'categories' => $categories,
            'products' => $products,
            'controller_name' => 'ShopController',
            'user' => $user,
        ]);
    }
}
