<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class Home extends AbstractController
{
    #[Route('/')]
    public function home(): Response
    {
        $request = Request::createFromGlobals();
        $name = $request->get('name');

        return $this->render('base.html.twig', [
            'name' => $name,
        ]);
    }
}
