<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use App\Repository\ProductCategoryRepository;
use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;

class ProductDetailsController extends AbstractController
{
    #[Route('/details', name: 'app_product_details')]
    public function index(Request $request, ProductRepository $productRepo, ProductCategoryRepository $productCategory): Response
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
        $categories = $productCategory->findAll();
        $productId = $request->query->getInt('produit');
        $product = $productRepo->findOneById($productId);
        $productsSimilar = $productRepo->findSimilar($product->getId(), $product->getCategory());
        return $this->render('product_details/index.html.twig', [
            'controller_name' => 'ProductDetailsController',
            'product' => $product,
            'categories' => $categories,
            'productsSimilar' => $productsSimilar,
        ]);
    }
}
