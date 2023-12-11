<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VoiturController extends AbstractController
{
    #[Route('/voitur', name: 'app_voitur')]
    public function index(): Response
    {
        return $this->render('voitur/index.html.twig', [
            'controller_name' => 'VoiturController',
        ]);
    }
}
