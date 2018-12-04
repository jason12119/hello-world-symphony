<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response("heyooooo");
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
    return new Response(sprintf(
        'Future page to show the article: %s', $slug
    ));
    }

    /**
     * @Route("/freddy")
     */
    public function mercury()
    {
        return new Response("Another one bites the dust");
    }
}