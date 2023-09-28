<?php
namespace App\Controller;

use Doctrine\DBAL\Schema\Index;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController
{
    #[Route('/', name: 'Index')]
    public function number() : Response
    {
	return new Response(rand(0,100));
     }
}
