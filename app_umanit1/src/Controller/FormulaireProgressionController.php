<?php

namespace App\Controller;

use App\Entity\FormulaireProgression;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\FormulaireProgressionType;
use App\Repository\FormulaireProgressionRepository;
use Symfony\Component\HttpFoundation\Request;

class FormulaireProgressionController extends AbstractController
{
    /**
     * @Route("/home/formulaire/progression/{id}", name="formulaire_progression", , requirements={"id"="\d+"})
     */
    public function index(Request $request, $id = 'create', FormulaireProgressionRepository $formulaireProgressionRepository): Response
    {
        $action = $request->get('action');
        $entityManager = $this->getDoctrine()->getManager();
        $formulaireProgression = new FormulaireProgression;
        
        // if ($id != 'create') {
        //     $formulaireProgression = $formulaireProgressionRepository->find($id);
        // }
        // si formulaireProgression null err 404
        // Si injecter security isgrandted(role admin === false)
            // if not user = employe getUser() && lié au manager
        //formulaire/progression/id verifier int
        //action creer

        //generation session
        //workflow
        //security (creation formulaire manager) qui a acces à quoi 
        //
        $form = $this->createForm(FormulaireProgressionType::class, $formulaireProgression);

        $form->handleRequest($request);
       
        if ($form->isSubmitted() && $form->isValid()) {
            if($formulaireProgression->getStatus() == "A_COMPLETER" && $action="save") {
        
                $formulaireProgression->setStatus("EN_REVISION");
            }
            //  else if($formulaireProgression->getStatus() == "TO_REVIEW" && $action = "save" && )


            $formulaireProgression = $form->getData();
            $entityManager->persist($formulaireProgression);
            $entityManager->flush();
            // ... do your form processing, like saving the Task and Tag entities
        }

        return $this->render('formulaire_progression/index.html.twig', [
            'data' => $formulaireProgression,
            'form' => $form->createView(),
        ]);
    }
}
