<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloWorld
{
    #[Route('/hello')]
    public function hello(): Response
    {
        return new Response(
            '<html><body>Hello World! </body></html>'
        );
    }
}


?>