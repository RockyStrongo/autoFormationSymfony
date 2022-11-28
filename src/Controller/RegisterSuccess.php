<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RegisterSuccess extends AbstractController
{
    #[Route('/register-success', name: 'register-success')]
    public function RegisterSuccess(): Response
    {   
        return $this->render('RegisterSuccess.html.twig');
    }
}


?>