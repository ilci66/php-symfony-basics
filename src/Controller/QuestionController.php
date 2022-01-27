<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class QuestionController
{   
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('HOME');
    }

    /**
    * @Route("/questions/{slug}")
    */
    public function show($slug)
    {
        return new Response(sprintf(
            '%s?, hmm... looking for an answer',
            str_replace('-', ' ', $slug)));
    }
}

?>