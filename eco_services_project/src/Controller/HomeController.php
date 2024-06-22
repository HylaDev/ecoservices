<?php

namespace App\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\ServiceRepository;
use App\Repository\ProductRepository;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(ServiceRepository $serviceRepo, ProductRepository $productRepo): Response
    {
        $service = $serviceRepo->findAll();

        if($this->getUser() and !$this->getUser()->getCustomerRole()){
            return $this->redirectToRoute('app_product_index');
        }

        return $this->render('home/index.html.twig', [
            'services' => $service,
            'products' => $productRepo->findLimit6(),
        ]);
    }
}
