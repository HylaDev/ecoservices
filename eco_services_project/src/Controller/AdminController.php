<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\ProductRepository;
use App\Repository\ServiceRepository;
use App\Repository\CommandRepository;
use App\Repository\QuoteRequestRepository;
use App\Repository\UsersRepository;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    public function index(UsersRepository $usersRepository,QuoteRequestRepository $quoteRequestRepository,CommandRepository $commandRepository,ServiceRepository $serviceRepository,ProductRepository $productRepository): Response
    {
        $nb_product = count($productRepository->findAll());
        $nb_service = count($serviceRepository->findAll());
        $nb_command = count($commandRepository->findAll());
        $nb_quoteRequest = count($quoteRequestRepository->findAll());
        $nb_users = count($usersRepository->findAll());

        return $this->render('admin/index.html.twig', [
            'nb_product' => $nb_product,
            'nb_service' => $nb_service,
            'nb_command' => $nb_command,
            'nb_quoteRequest' => $nb_quoteRequest,
            'nb_users' => $nb_users,
            'controller_name' => 'AdminController',
        ]);
    }
}
