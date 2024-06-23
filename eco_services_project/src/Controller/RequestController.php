<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Service\RequestService;

class RequestController extends AbstractController
{
    private RequestService $requestService;

    public function __construct(RequestService $requestService)
    {
        $this->requestService = $requestService;
    }

    #[Route('/request', name: 'app_request')]
    public function index(): Response
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
        $requests = $this->requestService->getRequest();
        return $this->render('quote_resquet/index.html.twig', [
            'requests' => $requests,
            'controller_name' => 'RequestController',
        ]);
    }

    #[Route('/add_to_request', name: 'add_to_request')]
    public function add_to_request(Request $request): Response
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
        $serviceId = $request->query->getInt('service_id');
        $quantity = $request->query->getInt('quantity');

        $this->requestService->add($serviceId, $quantity);

        return $this->redirectToRoute('app_request');
    }

    #[Route('/update_request', name: 'update_request')]
    public function update_request(Request $request): Response
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
        $serviceId = $request->query->getInt('service_id');
        $quantity = 1;
        if($request->query->getBoolean('manus')){
            $quantity = -1;
        }

        $this->requestService->update($serviceId, $quantity);

        return $this->redirectToRoute('app_request');
    }

    #[Route('/remove_to_request', name: 'remove_to_request')]
    public function remove_to_request(Request $request): Response
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
        $serviceId = $request->query->getInt('service_id');

        $this->requestService->remove_to($serviceId);

        return $this->redirectToRoute('app_request');
    }

    #[Route('/send_request', name: 'send_request', methods:"POST")]
    public function send_request(Request $request): Response
    {
        $comment = $request->request->get('comment');
        if (empty($comment)) {
            $this->addFlash('error', 'Le commentaire ne peut pas être vide.');
            return $this->redirectToRoute('app_request');
        }
        $user = $this->getUser();
        $this->requestService->submitRequest($user,$comment);
        $this->requestService->clear();
        return $this->render('quote_resquet/confirm.html.twig', [
            'controller_name' => 'RequestController',
        ]);
    }
}
