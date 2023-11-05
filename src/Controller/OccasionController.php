<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OccasionController extends AbstractController
{
    #[Route('/occasion', name: 'app_occasion')]
    public function index(): Response
    {
        return $this->render('occasion/index.html.twig', [
            'controller_name' => 'OccasionController',
        ]);
    }
}
