<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class GestionStockController extends AbstractController
{
    #[Route('/admin/gestion/stock', name: 'app_gestion_stock')]
    public function index(): Response
    {
        return $this->render('gestion_stock/index.html.twig', [
            'controller_name' => 'GestionStockController',
        ]);
    }
}
