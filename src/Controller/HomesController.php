<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomesController extends AbstractController
{
    /**
     * @Route("/homes", name="homes")
     */
    public function index(): Response
    {
        $conn = $this->getDoctrine()->getConnection('reports');

        $sql = 'select T_EP_ORGANIZATION_EP_ID , ORGANIZATION , DM_ORG_DESC from t_ep_organization where T_EP_ORGANIZATION_EP_ID > 0 order by DM_ORG_DESC asc';

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $organizations = $stmt->fetchAll();

        $sql = 'select * from t_ep_site';

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $stores = $stmt->fetchAll();

        return $this->render('homes/index.html.twig', [
            'controller_name' => 'HomesController',
            'organizations' => $organizations,
        ]);
    }
}
