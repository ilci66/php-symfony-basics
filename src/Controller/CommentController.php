<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CommentController extends AbstractController
{

    /**
     * @Route("/comments/{id}/vote/{direction}")
     */
    public function commentVote($id, $direction)
    {
        // todo - use id to query the database
        // use real logic here to save this to the database
        if ($direction === 'up') {
            $currentVoteCount = rand(7, 100);
        } else {
            $currentVoteCount = rand(0, 5);
        }

        // jsonresponse extends response just hover on it
        // content type is also set to "application/json"
        // return new JsonResponse(['votes' => $currentVoteCount]);
        return $this->json(['votes' => $currentVoteCount]); // this is a shortcut
    } 
}


?>