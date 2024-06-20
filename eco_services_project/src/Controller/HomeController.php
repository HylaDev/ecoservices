<?php

namespace App\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\ServiceRepository;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(ServiceRepository $serviceRepo): Response
    {
        $service = $serviceRepo->findAll();
        return $this->render('home/index.html.twig', [
            'services' => $service,
        ]);
    }
}
