<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class GestionDevisController extends AbstractController
{
    #[Route('/admin/gestion/devis', name: 'app_gestion_devis')]
    public function index(): Response
    {
        return $this->render('gestion_devis/index.html.twig', [
            'controller_name' => 'GestionDevisController',
        ]);
    }
}
