<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuisommeController extends AbstractController
{
    #[Route('/qui-sommes-nous', name: 'quisomme')]
    public function index(): Response
    {
        return $this->render('quisomme/index.html.twig', [
            'controller_name' => 'QuisommeController',
        ]);
    }
}
