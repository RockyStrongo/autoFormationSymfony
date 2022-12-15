<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;


class ProductSuccess extends AbstractController
{
    #[Route('/product-success', name: 'product-success')]
    public function ProductSuccess(): Response
    {   
        $request = Request::createFromGlobals();
        return $this->render('ProductSuccess.html.twig');
    }
}


?>