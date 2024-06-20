<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ChoiceServiceController extends AbstractController
{
    #[Route('/choice/service', name: 'app_choice_service')]
    public function index(): Response
    {
        return $this->render('choice_service/index.html.twig', [
            'controller_name' => 'ChoiceServiceController',
        ]);
    }
}
