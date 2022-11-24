<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HelloWorld
{
    public function hello(): Response
    {
        return new Response(
            '<html><body>Hello World! </body></html>'
        );
    }
}


?>