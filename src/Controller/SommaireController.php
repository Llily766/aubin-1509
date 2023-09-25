<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SommaireController extends AbstractController
{
    #[Route('/sommaire', name: 'app_sommaire')]
    public function index(): Response
    {
        return $this->render('sommaire/index.html.twig', [
            'controller_name' => 'SommaireController',
        ]);
    }
}
