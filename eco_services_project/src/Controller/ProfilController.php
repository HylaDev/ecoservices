<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\QuoteRequestRepository;

class ProfilController extends AbstractController
{
    #[Route('/profil', name: 'profil')]
    public function index(QuoteRequestRepository $quoteRequestRepository): Response
    {
        $user = $this->getUser();

        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $requests = $quoteRequestRepository->findByUserId($user);
        
        return $this->render('profil/index.html.twig', [
            'requests' => $requests,
            'controller_name' => 'ProfilController'
        ]);
    }
}
