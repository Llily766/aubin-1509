<?php
namespace App\Controller;

use Doctrine\DBAL\Schema\Index;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    #[Route('/', name: Index)]
    public function number() : Response
    {
	return new Response(rand(0,100));
     }
}
