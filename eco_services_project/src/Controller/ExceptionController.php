<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class ExceptionController extends AbstractController
{
    /**
     * @Route("/access-denied", name="access_denied")
     */
    public function showAccessDeniedPage(\Throwable $exception): Response
    {
        if ($exception instanceof AccessDeniedHttpException) {
            return $this->render('error/access_denied.html.twig');
        } 
        throw $exception;
    }
}
