<?php

namespace App\Controller;

use App\Entity\QrStatus;
use App\Form\QrStatusType;
use App\Repository\QrStatusRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/qr/status')]
class QrStatusController extends AbstractController
{
    #[Route('/', name: 'app_qr_status_index', methods: ['GET'])]
    public function index(QrStatusRepository $qrStatusRepository): Response
    {
        return $this->render('qr_status/index.html.twig', [
            'qr_statuses' => $qrStatusRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_qr_status_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $qrStatus = new QrStatus();
        $form = $this->createForm(QrStatusType::class, $qrStatus);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($qrStatus);
            $entityManager->flush();

            return $this->redirectToRoute('app_qr_status_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('qr_status/new.html.twig', [
            'qr_status' => $qrStatus,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_qr_status_show', methods: ['GET'])]
    public function show(QrStatus $qrStatus): Response
    {
        return $this->render('qr_status/show.html.twig', [
            'qr_status' => $qrStatus,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_qr_status_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, QrStatus $qrStatus, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(QrStatusType::class, $qrStatus);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_qr_status_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('qr_status/edit.html.twig', [
            'qr_status' => $qrStatus,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_qr_status_delete', methods: ['POST'])]
    public function delete(Request $request, QrStatus $qrStatus, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$qrStatus->getId(), $request->getPayload()->get('_token'))) {
            $entityManager->remove($qrStatus);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_qr_status_index', [], Response::HTTP_SEE_OTHER);
    }
}
