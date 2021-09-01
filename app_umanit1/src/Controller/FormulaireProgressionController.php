<?php

namespace App\Controller;

use App\Entity\FormulaireProgression;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\FormulaireProgressionType;
use App\Repository\FormulaireProgressionRepository;
use Doctrine\ORM\EntityManagerInterface;
use LogicException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Workflow\WorkflowInterface;

class FormulaireProgressionController extends AbstractController
{
    private $formulaireProgressionWorkflow;
 
    public function __construct(WorkflowInterface $formulaireProgressionWorkflow)
    {
        $this->formulaireProgressionWorkflow = $formulaireProgressionWorkflow;
    }
    /**
     * @Route("/home/formulaire/progression/new", name="formulaire_progression")
     */
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $formulaireProgression = new FormulaireProgression();
        $user = $this->getUser();
        
        $form = $this->createForm(FormulaireProgressionType::class, $formulaireProgression);


        $form->handleRequest($request);
       
        if ($form->isSubmitted() && $form->isValid()) {
            $formulaireProgression = $form->getData();

            try {
                $this->formulaireProgressionWorkflow->apply($formulaireProgression, 'a_remplir');
            } catch (LogicException $exception) {
                //
            }
            
            $entityManager->persist($formulaireProgression);
            $entityManager->flush();
        }

        return $this->render('formulaire_progression/index.html.twig', [
            'data' => $formulaireProgression,
            'form' => $form->createView(),
            'user' => $user,
        ]);
    }

    /**
    * @Route("/home/formulaire/progression/manager/{id}", name="formulaire_progression_manager")
    */
    public function manager(FormulaireProgressionRepository $formulaireProgressionRepository): Response
    {
        return $this->render('formulaire_progression/index.html.twig', [
            'formulaire' => $formulaireProgressionRepository->find(),
        ]);
    }

    /**
    * @Route("/home/formulaire/progression/collaborateur/{id}", name="formulaire_progression_collaborateur")
    */
    public function collaborateur(FormulaireProgressionRepository $formulaireProgressionRepository, $id): Response
    {
        return $this->render('formulaire_progression/index.html.twig', [
            'formulaire' => $formulaireProgressionRepository->find($id),
        ]);
    }

    /**
    * @Route("/home/formulaire/progression/change/{id}/{to}", name="formulaire_progression_change")
    */
    public function change(FormulaireProgression $formulaireProgression, String $to, EntityManagerInterface $entityManager): Response
    {
        
    
        $entityManager->persist($formulaireProgression);
        $entityManager->flush();
    
        return $this->redirectToRoute('formulaire_progression');
    }
}
