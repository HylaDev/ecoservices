<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\ProductCategoryRepository;
use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Request;

class ShopController extends AbstractController
{
    #[Route('/shop', name: 'shop')]
    public function index(Request $request, ProductCategoryRepository $productCategoryRepository, ProductRepository $productRepository): Response
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
        $cateId = 0;
        if($request->query->getInt('category_id')){
            $cateId=$request->query->getInt('category_id');
        };
        $categories = $productCategoryRepository->findAll();
        $products = $productRepository->findAll();
        $user = $this->getUser();
        return $this->render('shop/index.html.twig', [
            'categories' => $categories,
            'products' => $products,
            'cateId' => $cateId,
            'controller_name' => 'ShopController',
            'user' => $user,
        ]);
    }
}
