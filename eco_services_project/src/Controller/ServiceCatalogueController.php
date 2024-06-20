<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\ServiceRepository;

class ServiceCatalogueController extends AbstractController
{
    #[Route('/service/catalogue', name: 'app_service_catalogue')]
    public function index(ServiceRepository $serviceRepo): Response
    {   
        $service = $serviceRepo->findAll();
        return $this->render('service_catalogue/index.html.twig', [
            'services' => $service,
        ]);
    }
}
