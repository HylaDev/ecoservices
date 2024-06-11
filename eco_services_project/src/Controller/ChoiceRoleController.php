<?php

namespace App\Controller;

use App\Repository\CustomerRoleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ChoiceRoleController extends AbstractController
{
    #[Route('/rolecustomer', name: 'app_choice_role')]
    public function index(CustomerRoleRepository $customerRoleRepository): Response
    {
        $roles = $customerRoleRepository->findAll();
        return $this->render('choice_role/index.html.twig', [
            'roles' => $roles,
            'controller_name' => 'ChoiceRoleController',
        ]);
    }
}
