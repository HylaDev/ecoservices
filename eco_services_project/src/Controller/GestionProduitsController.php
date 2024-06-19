<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class GestionProduitsController extends AbstractController
{
    #[Route('/admin/gestion/produits', name: 'app_gestion_produits')]
    public function index(): Response
    {
        return $this->render('gestion_produits/index.html.twig', [
            'controller_name' => 'GestionProduitsController',
        ]);
    }
}
