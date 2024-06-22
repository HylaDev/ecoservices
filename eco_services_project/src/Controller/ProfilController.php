<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\QuoteRequestRepository;
use App\Repository\CommandRepository;
use Symfony\Component\HttpFoundation\Request;

class ProfilController extends AbstractController
{
    #[Route('/profil', name: 'profil')]
    public function index(CommandRepository $commandRepository,QuoteRequestRepository $quoteRequestRepository): Response
    {
        $user = $this->getUser();

        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $requests = $quoteRequestRepository->findByUserId($user);
        $commands = $commandRepository->findByUserId($user);
        
        return $this->render('profil/index.html.twig', [
            'requests' => $requests,
            'commands' => $commands,
            'controller_name' => 'ProfilController'
        ]);
    }

    #[Route('/show_detail_command', name: 'show_detail_command')]
    public function show_detail_command(Request $request,CommandRepository $commandRepository): Response
    {
        $user = $this->getUser();

        if (!$user) {
            return $this->redirectToRoute('app_login');
        }
        $customerRole = $user->getCustomerRole();

        if ($customerRole->getName() !== 'Particulier') {
            $content = $this->renderView('error/access_denied.html.twig');
            return new Response($content, 403);
        }

        $command = $commandRepository->findOneById($request->query->getInt('command_id'));
        
        return $this->render('profil/commandDetail.html.twig', [
            'command_details' => $command->getCommandDetails(),
            'controller_name' => 'ProfilController'
        ]);
    }
    
    #[Route('/show_detail_request', name: 'show_detail_request')]
    public function show_detail_request(Request $request,QuoteRequestRepository $quoteRequestRepository): Response
    {
        $user = $this->getUser();

        if (!$user) {
            return $this->redirectToRoute('app_login');
        }
        $customerRole = $user->getCustomerRole();

        if ($customerRole->getName() !== 'Professionnel') {
            $content = $this->renderView('error/access_denied.html.twig');
            return new Response($content, 403);
        }

        $quoteRequest = $quoteRequestRepository->findOneById($request->query->getInt('request_id'));
        
        return $this->render('profil/requestDetail.html.twig', [
            'request_details' => $quoteRequest->getQuoteRequestDetails(),
            'controller_name' => 'ProfilController'
        ]);
    }
}
