<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{

    /**
     * @Route("/articles", name="list_articles")
     */
    public function listArticles()
    {
       $articles = [
           1 => [
               'title' => 'blabla'
           ]
       ];

       return new Response($articles[1]['title']);
    }

}
