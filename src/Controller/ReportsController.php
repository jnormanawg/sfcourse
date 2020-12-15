<?php

namespace App\Controller;

use App\Repository\OrganizationRepository;
use App\Repository\PostRepository;
use App\Repository\UserRepository;
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

    /**
     * @Route("/organization", name="organization")
     */
    public function organization()
    {
        $conn = $this->getDoctrine()->getConnection('reports');
        dump($conn);

        $sql = 'select T_EP_ORGANIZATION_EP_ID , ORGANIZATION , DM_ORG_DESC from t_ep_organization';

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $organizations = $stmt->fetchAll();
        dump($organizations);

//        $model = new model();
        $form = $this->createFormBuilder()
            ->add('brand_id',ChoiceType::class,array(
                'label'=>'Brand Name',
                'choices'=>array($organizations),
            ))
            ->add('name',TextType::class,array('label'=>'Model Name'))
            ->add('comment',TextType::class,array('label'=>'Comments'))
            ->add('save',SubmitType::class, array('label'=>'Add Model'))
            ->getForm();

        die();
//        $posts = $organizationRepository->findAll();
//        dump($posts);
//        return $this->render('reports/index.html.twig', [
//            'controller_name' => 'ReportsController',
//            'posts' => $posts
//        ]);

    }

}
