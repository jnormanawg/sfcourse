<?php

namespace App\Controller;

use App\Entity\Post;
//use http\Env\Request;
use App\Form\PostType;
use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;
/**
 * @Route("/post", name="post.")
 */

class PostController extends AbstractController
{
    /**
     * @Route("/", name="index")
     * @param PostRepository $postRepository
     * @return Response
     */
    public function index(PostRepository $postRepository)
    {
        $posts = $postRepository->findAll();

        return $this->render('post/index.html.twig', [
            'posts' => $posts
        ]);
    }

    /**
     * @Route("/create", name="create")
     * @param Request $request
     */
    public function create(Request $request){

        $post = new Post();

        //$post->setTitle('This is the new text string');

        $form = $this->createForm(PostType::class, $post);

        $form->handleRequest($request);

        if ($form->isSubmitted()){
            $em = $this->getDoctrine()->getManager();

            $em->persist($post);
            $em->flush();

            return $this->redirect($this->generateUrl('post.index'));
        }


        //return a response or view
        //return new Response( 'Post is committed');
        return $this->render( 'post/create.html.twig', [
            'form' => $form->createView()
        ]);

    }

    /**
     * @Route("/createTest", name="createTest")
     * @param Request $request
     */
    public function createTest(Request $request){

        $post = new Post();

        //$post->setTitle('This is the new text string');

        $form = $this->createForm(ReportsType::class, $post);

        $form->handleRequest($request);

        if ($form->isSubmitted()){
            $em = $this->getDoctrine()->getManager();

            $em->persist($post);
            $em->flush();

            return $this->redirect($this->generateUrl('post.index'));
        }


        //return a response or view
        //return new Response( 'Post is committed');
        return $this->render( 'post/create.html.twig', [
            'form' => $form->createView()
        ]);

    }

    /**
     * @Route("/show/{id}", name="show")
     * @param Post $post
     * @return Response
     */

    public function show(Post $post){
        return $this->render('post/show.html.twig' , [
            'post' => $post
        ]);
    }

    /**
     * @Route("/delete/{id}", name="delete")
     * @param Post $post
     * @return Response
     */

    public function remove(Post $post){
        $em = $this->getDoctrine()->getManager();

        $em->remove($post);
        $em->flush();

        $this->addFlash('success' , 'Post was removed' );

        return $this->redirect($this->generateUrl( 'post.index'));
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

        return $this->render('post/tprbatches.html.twig', [
            'tprbatches' => $tprBatches
        ]);

//        var_dump($stmt->fetchAll());die;
    }

    /**
     * @Route("/tprbatch/{id}", name="tprbatch")
     * @param Post $post
     */

    public function tprbatch(Post $post){

        $id = $post->getId();

        var_dump($post);
        die;

        $conn = $this->getDoctrine()->getConnection();
        $sql = 'SELECT * FROM reports where id = 1';
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $tprBatch = $stmt->fetchAll();
        //$tprBatch = $post;

        return $this->render('post/tprbatch.html.twig', [
            'tprbatch' => $tprBatch
        ]);

//        var_dump($stmt->fetchAll());die;
    }

}
