<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\ProductCategoryRepository;

class CategoryController extends AbstractController
{
    #[Route('/category', name: 'categories')]
    public function index(ProductCategoryRepository $productCategoryRepository): Response
    {
        $categories = $productCategoryRepository->findAll();
        return $this->render('category/index.html.twig', [
            'categories' => $categories,
            'controller_name' => 'CategoryController',
        ]);
    }
}
