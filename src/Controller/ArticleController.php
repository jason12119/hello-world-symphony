<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
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
        $comments = ['I like parek', 'I dont like parek', 'Some people actually like parek'];
    return $this->render('article/show.html.twig', [
        'title' => ucwords(str_replace('-', ' ', $slug)),
        'comments' => $comments,
    ]);
    }




}