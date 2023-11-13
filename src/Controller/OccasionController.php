<?php

namespace App\Controller;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Cars;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class OccasionController extends AbstractController
{
    #[Route('/occasion', name: 'app_occasion')]
    public function index(EntityManagerInterface $entityManager ): Response 
    {
        $Cars = $entityManager->getRepository(Cars::class)->findAll();
        return $this->render('occasion/index.html.twig', [
            'controller_name' => 'OccasionController',
            'Cars' => $Cars,
        ]);
    }
}
