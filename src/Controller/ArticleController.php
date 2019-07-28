<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /**
     * @Route()
     */
    public function homepage()
    {
        return new Response('OMG!');
    }

    /**
     * @Route("/news/{slug}")
     * @param $slug
     * @return Response
     */
    public function show($slug)
    {
        return new Response(sprintf(
            'Future page to show one space article %s',
            $slug
        ));
    }
}