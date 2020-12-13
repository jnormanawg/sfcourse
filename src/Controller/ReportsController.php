<?php

namespace App\Controller;

use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/reports", name="reports.")
 */

class ReportsController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(PostRepository $postRepository): Response
    {
        $posts = $postRepository->findAll();

//        return $this->render('post/index.html.twig', [
//            'posts' => $posts
//        ]);

        return $this->render('reports/index.html.twig', [
            'controller_name' => 'ReportsController',
            'posts' => $posts
        ]);
    }
}
