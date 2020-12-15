<?php

namespace App\Controller;

use App\Form\Note;
use App\Form\NoteFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PostRepository;

class NoteController extends AbstractController
{
    /**
     * @Route("/note", name="note")
     * @param Request $request
     * @return Response
     */
    public function index(Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        dump($entityManager);

        $conn = $this->getDoctrine()->getConnection('reports');
        dump($conn);

        $sql = 'select T_EP_ORGANIZATION_EP_ID , ORGANIZATION , DM_ORG_DESC from t_ep_organization';

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $organizations = $stmt->fetchAll();

//        return $this->render('anker/costchange.html.twig', [
//            'tprbatches' => $organizations
//        ]);


        $note = new Note();
        $noteForm = $this->createForm(NoteFormType::class, $note);
        $noteForm->handleRequest($request);

        if ($noteForm->isSubmitted() && $noteForm->isValid()) {

            $data = $noteForm->getData();
            $message = $data->message;
            $created = $data->created->format('Y-m-d h:i:s');

            return $this->redirectToRoute('success',
                ['message' => $message, 'created' => $created]);
        }

        return $this->render('note/index.html.twig', [
            'note_form' => $noteForm->createView(),
            'controller_name' => 'NotesController',
        ]);
    }
}