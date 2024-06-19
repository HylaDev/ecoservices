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
        $user = $this->getUser();

        if (!$user) {
            return $this->redirectToRoute('app_login');
        }
        $customerRole = $user->getCustomerRole();

        if ($customerRole->getName() !== 'Particulier') {
            $content = $this->renderView('error/access_denied.html.twig');
            return new Response($content, 403);
        }
        $categories = $productCategoryRepository->findAll();
        return $this->render('category/index.html.twig', [
            'categories' => $categories,
            'controller_name' => 'CategoryController',
        ]);
    }
}
