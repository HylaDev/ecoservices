<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExceptionController extends AbstractController
{
    /**
     * @Route("/access-denied", name="access_denied")
     */
    public function showAccessDeniedPage(): Response
    {
        $content = $this->renderView('error/access_denied.html.twig');
        return new Response($content, 403);
    }
}
