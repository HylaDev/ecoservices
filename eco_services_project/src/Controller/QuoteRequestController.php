<?php

namespace App\Controller;

use App\Entity\QuoteRequest;
use App\Form\QuoteRequestType;
use App\Service\MailerService;
use App\Repository\QuoteRequestRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/quote/request')]
class QuoteRequestController extends AbstractController
{
    #[Route('/', name: 'app_quote_request_index', methods: ['GET'])]
    public function index(QuoteRequestRepository $quoteRequestRepository): Response
    {
        return $this->render('quote_request/index.html.twig', [
            'quote_requests' => $quoteRequestRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_quote_request_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $quoteRequest = new QuoteRequest();
        $form = $this->createForm(QuoteRequestType::class, $quoteRequest);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($quoteRequest);
            $entityManager->flush();

            return $this->redirectToRoute('app_quote_request_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('quote_request/new.html.twig', [
            'quote_request' => $quoteRequest,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_quote_request_show', methods: ['GET'])]
    public function show(QuoteRequest $quoteRequest): Response
    {
        return $this->render('quote_request/show.html.twig', [
            'quote_request' => $quoteRequest,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_quote_request_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, QuoteRequest $quoteRequest, EntityManagerInterface $entityManager, MailerService $mailerService): Response
    {
        $form = $this->createForm(QuoteRequestType::class, $quoteRequest);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $oldStatus = $quoteRequest->getStatus()->getName();

            $entityManager->flush();

            $data = $form->getData();
            $selectedStatus = $data->getStatus();

            $useremail = $quoteRequest->getQrUser()->getEmail();
            $mailerService->updateQuoteRequestEmail($useremail);

            return $this->redirectToRoute('app_quote_request_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('quote_request/edit.html.twig', [
            'quote_request' => $quoteRequest,
            'details' => $quoteRequest->getQuoteRequestDetails(),
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_quote_request_delete', methods: ['POST'])]
    public function delete(Request $request, QuoteRequest $quoteRequest, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$quoteRequest->getId(), $request->getPayload()->get('_token'))) {
            $entityManager->remove($quoteRequest);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_quote_request_index', [], Response::HTTP_SEE_OTHER);
    }
}
