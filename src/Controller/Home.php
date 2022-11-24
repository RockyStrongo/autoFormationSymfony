<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class Home
{
    #[Route('/')]
    public function home(): Response
    {
        $request = Request::createFromGlobals();
        $name = $request->get('name');

        return new Response(
            '<html>
            <body>
            Welcome Home '.$name.' !
            <br>
            <a href="/hello">Go to hello</a>
            </body>
            </html>'
        );
    }
}
