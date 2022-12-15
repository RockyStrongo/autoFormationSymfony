<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;


class RegisterSuccess extends AbstractController
{
    #[Route('/register-success', name: 'register-success')]
    public function RegisterSuccess(): Response
    {   
        $request = Request::createFromGlobals();
        $name = $request->get('form')['name'];
        $email = $request->get('form')['email'];
        return $this->render('RegisterSuccess.html.twig', ['name'=>$name, "email"=>$email]);
    }
}


?>