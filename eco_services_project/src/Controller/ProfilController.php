<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProfilController extends AbstractController
{
    #[Route('/profil', name: 'profil')]
    public function index(): Response
    {
        $user = $this->getUser();

        if (!$user) {
            return $this->redirectToRoute('app_login');
        }
        
        return $this->render('profil/index.html.twig', [
            'controller_name' => 'ProfilController',
        ]);
    }
}
