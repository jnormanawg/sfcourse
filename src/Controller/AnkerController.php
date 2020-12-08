<?php

namespace App\Controller;

use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/anker", name="anker.")
 */
class AnkerController extends AbstractController
{
    /**
     * @Route("/", name="index")
     * @param PostRepository $postRepository
     * @return Response
     */

    public function index(): Response
    {
        return $this->render('anker/index.html.twig', [
            'controller_name' => 'AnkerController',
        ]);
    }

    /**
     * @Route("/tprbatches", name="tprBatches")
     * @param Request $request
     */

    public function tprBatches(Request $request){

        $conn = $this->getDoctrine()->getConnection();

        $sql = 'SELECT * FROM reports';
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $tprBatches = $stmt->fetchAll();
        //$tprBatches = $post;

        return $this->render('anker/tprbatches.html.twig', [
            'tprbatches' => $tprBatches
        ]);

//        var_dump($stmt->fetchAll());die;
    }

}
