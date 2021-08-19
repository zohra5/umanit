<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\FormulaireProgressionType;
use App\Repository\FormulaireProgressionRepository;
use Symfony\Component\HttpFoundation\Request;

class FormulaireProgressionController extends AbstractController
{
    /**
     * @Route("/formulaire/progression/{id}", name="formulaire_progression")
     */
    public function index(Request $request, $id = 'create', FormulaireProgressionRepository $formulaireProgressionRepository): Response
    {

        $entityManager = $this->getDoctrine()->getManager();
        $formulaireProgression = null;
        if ($id != 'create') {
            $formulaireProgression = $formulaireProgressionRepository->find($id);
        }
        $form = $this->createForm(FormulaireProgressionType::class, $formulaireProgression);

        $form->handleRequest($request);
       
        if ($form->isSubmitted() && $form->isValid()) {
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
