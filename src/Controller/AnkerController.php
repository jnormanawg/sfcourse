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

    /**
     * @Route("/costChangeHistory", name="costChangeHistory")
     * @param Request $request
     */

    public function costChangeHistory(Request $request){

        $conn = $this->getDoctrine()->getConnection('reports');

        $sql = 'SELECT
    1 ITEM_ID,
    2 AS ITEM_CODE,
    3        AS ITEM_UPC,
    4        AS ITEM_POS_DESCRIPTION,
    5 AS PACK,
    6            AS SIZE2,
    7 AS CUR_MULTIPLE,
    8 AS CUR_RETAIL,
    9 AS CUR_GM_PRCNT,
    10 AS NET_COST_CURRENT,
    11     AS CUR_COST_DATE,
    12 AS FUT_RETAIL_MULTIPLE,
    13 AS FUT_RETAIL,
    14 AS FUT_GM_PRCNT,
    15 AS NET_COST_FUTURE,
	16 AS XX_FUT_COST_DATE , 
    17 AS AUTHORIZATION_STATUS,
    18 AS RETAIL_SOURCE,
    19 AS STORE_OVD_OPTIONS,
    20 AS STR_MULTIPLE,
    21 AS STR_FIXED_RETAIL,
    22 AS STR_GM_PERC_RETAIL,
    23 AS STR_FIXED_TO_AUTO_RETAIL,
    24 AS STR_AUTO_PERCENT,
    25 AS TPR_MULTIPLE,
    26    AS TPR_RETAIL,
    27 AS TPR_BEGIN_DATE,
    28 AS TPR_END_DATE,
    29 AS AWG_DEPARTMENT,
    30 AS CATEGORY,
    31 AS SUB_CATEGORY,
    32         AS UPDATED_PRICE_ZONE,
    33       AS ITEM_RANKING,
    34   AS ITEM_RANKING_QUANTITY,
    35              AS OBI,
    36 AS CURRENT_DIVI_GM_PRCNT,
    37 AS DIVI_ZONE_RETAIL_PARENT,
    38 AS DIVI_ZONE_FIX_MULTIPLE,
    39 AS CUR_COST,
    40         AS FUT_COST_DATE
FROM
REPORT_NAMES';
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $tprBatches = $stmt->fetchAll();
        //$tprBatches = $post;

        return $this->render('anker/costchange.html.twig', [
            'tprbatches' => $tprBatches
        ]);

//        var_dump($stmt->fetchAll());die;
    }

    /**
     * @Route("/priceChangeHistory", name="priceChangeHistory")
     * @param Request $request
     */

    public function priceChangeHistory(Request $request){

        $conn = $this->getDoctrine()->getConnection('reports');

        $sql = 'SELECT
    1 ITEM_ID,
    2 AS ITEM_CODE,
    3        AS ITEM_UPC,
    4        AS ITEM_POS_DESCRIPTION,
    5 AS PACK,
    6            AS SIZE2,
    7 AS CUR_MULTIPLE,
    8 AS CUR_RETAIL,
    9 AS CUR_GM_PRCNT,
    10 AS NET_COST_CURRENT,
    11     AS CUR_COST_DATE,
    12 AS FUT_RETAIL_MULTIPLE,
    13 AS FUT_RETAIL,
    14 AS FUT_GM_PRCNT,
    15 AS NET_COST_FUTURE,
	16 AS XX_FUT_COST_DATE , 
    17 AS AUTHORIZATION_STATUS,
    18 AS RETAIL_SOURCE,
    19 AS STORE_OVD_OPTIONS,
    20 AS STR_MULTIPLE,
    21 AS STR_FIXED_RETAIL,
    22 AS STR_GM_PERC_RETAIL,
    23 AS STR_FIXED_TO_AUTO_RETAIL,
    24 AS STR_AUTO_PERCENT,
    25 AS TPR_MULTIPLE,
    26    AS TPR_RETAIL,
    27 AS TPR_BEGIN_DATE,
    28 AS TPR_END_DATE,
    29 AS AWG_DEPARTMENT,
    30 AS CATEGORY,
    31 AS SUB_CATEGORY,
    32         AS UPDATED_PRICE_ZONE,
    33       AS ITEM_RANKING,
    34   AS ITEM_RANKING_QUANTITY,
    35              AS OBI,
    36 AS CURRENT_DIVI_GM_PRCNT,
    37 AS DIVI_ZONE_RETAIL_PARENT,
    38 AS DIVI_ZONE_FIX_MULTIPLE,
    39 AS CUR_COST,
    40         AS FUT_COST_DATE
FROM
REPORT_NAMES';
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $tprBatches = $stmt->fetchAll();
        //$tprBatches = $post;

        return $this->render('anker/pricechange.html.twig', [
            'tprbatches' => $tprBatches
        ]);

//        var_dump($stmt->fetchAll());die;
    }

    /**
     * @Route("/newmenu", name="newmenu")
     * @param Request $request
     */

    public function newmenu(Request $request)
    {

        $conn = $this->getDoctrine()->getConnection('reports');
        $sql = 'select id , title from report_names';

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $product = $stmt->fetchAll();

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id ' . $productId
            );
        }

//        $model = new model();
        $form = $this->createFormBuilder()
            ->add('brand_id', ChoiceType::class, array(
                'label' => 'Brand Name',
                'choices' => array($product),
                'choice_label' => function ($product, $key, $index) {
                    return strtoupper($product->getName());
                },
            ))
            ->add('name', TextType::class, array('label' => 'Model Name'))
            ->add('comment', TextType::class, array('label' => 'Comments'))
            ->add('save', SubmitType::class, array('label' => 'Add Model'))
            ->getForm();
    }

     /**
     * @Route("/newItemBatch", name="newItemBatch")
     * @param Request $request
     */

    public function newItemBatch(Request $request){

        //$conn = $this->getDoctrine()->getConnection();
        $conn = $this->getDoctrine()->getConnection('reports');
        //$conn = $this->get('doctrine')->getEntityManager('client');
        //dump($conn);
        //die;

        $sql = 'SELECT
    1 ITEM_ID,
    2 AS ITEM_CODE,
    3        AS ITEM_UPC,
    4        AS ITEM_POS_DESCRIPTION,
    5 AS PACK,
    6            AS SIZE2,
    7 AS CUR_MULTIPLE,
    8 AS CUR_RETAIL,
    9 AS CUR_GM_PRCNT,
    10 AS NET_COST_CURRENT,
    11     AS CUR_COST_DATE,
    12 AS FUT_RETAIL_MULTIPLE,
    13 AS FUT_RETAIL,
    14 AS FUT_GM_PRCNT,
    15 AS NET_COST_FUTURE,
	16 AS XX_FUT_COST_DATE , 
    17 AS AUTHORIZATION_STATUS,
    18 AS RETAIL_SOURCE,
    19 AS STORE_OVD_OPTIONS,
    20 AS STR_MULTIPLE,
    21 AS STR_FIXED_RETAIL,
    22 AS STR_GM_PERC_RETAIL,
    23 AS STR_FIXED_TO_AUTO_RETAIL,
    24 AS STR_AUTO_PERCENT,
    25 AS TPR_MULTIPLE,
    26    AS TPR_RETAIL,
    27 AS TPR_BEGIN_DATE,
    28 AS TPR_END_DATE,
    29 AS AWG_DEPARTMENT,
    30 AS CATEGORY,
    31 AS SUB_CATEGORY,
    32         AS UPDATED_PRICE_ZONE,
    33       AS ITEM_RANKING,
    34   AS ITEM_RANKING_QUANTITY,
    35              AS OBI,
    36 AS CURRENT_DIVI_GM_PRCNT,
    37 AS DIVI_ZONE_RETAIL_PARENT,
    38 AS DIVI_ZONE_FIX_MULTIPLE,
    39 AS CUR_COST,
    40         AS FUT_COST_DATE
FROM
REPORT_NAMES';
        $stmt = $conn->prepare($sql);
        $stmt->execute();
//var_dump($stmt->fetchAll());die;
        $newItemBatches = $stmt->fetchAll();
        //$newItemBatches = $post;

        return $this->render('anker/newitembatch.html.twig', [
            'newItemBatches' => $newItemBatches
        ]);

//        var_dump($stmt->fetchAll());die;
    }


}
