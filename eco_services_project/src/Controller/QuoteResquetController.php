<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class QuoteResquetController extends AbstractController
{
    #[Route('/quote/resquet', name: 'app_quote_resquet')]
    public function index(): Response
    {
        return $this->render('quote_resquet/index.html.twig', [
            'controller_name' => 'QuoteResquetController',
        ]);
    }
}
