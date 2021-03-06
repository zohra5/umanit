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
     * @Route("/home/formulaire/progression/{id}", name="formulaire_progression", requirements={"id"="\d+"})
     */
    public function index(Request $request, EntityManagerInterface $entityManager, $id = 'create', FormulaireProgressionRepository $formulaireProgressionRepository): Response
    {
        $formulaireProgression = new FormulaireProgression();
        $user = $this->getUser();
        dump($user);
        if ($id != 'create') {
                 $formulaireProgression = $formulaireProgressionRepository->find($id);
        }
        
        $form = $this->createForm(FormulaireProgressionType::class, $formulaireProgression);
        
        var_dump($this->formulaireProgressionWorkflow->getEnabledTransitions($formulaireProgression));

        $form->handleRequest($request);
        dump($form);
       
       
        if ($form->isSubmitted() && $form->isValid()) {
            $formulaireProgression = $form->getData();
            dump($form);

            try {
                $this->formulaireProgressionWorkflow->apply($formulaireProgression, 'creation');
            } catch (LogicException $exception) {
                 echo $exception->getMessage();
            }
          
            
            $entityManager->persist($formulaireProgression);
            $entityManager->flush();
        }

        return $this->render('formulaire_progression/index.html.twig', [
            'formulaire' => $formulaireProgression,
            'form' => $form->createView(),
            'user' => $user,
        ]);
    }

    /**
    * @Route("/home/formulaire/progression/change/{id}/{to}", name="formulaire_progression_change")
    */
    public function change(Request $request, FormulaireProgression $formulaireProgression, String $to, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(FormulaireProgressionType::class, $formulaireProgression);

        $formulaireProgression = $form->getData();
        $form->handleRequest($request);

        dump($formulaireProgression);

        try {
            $this->formulaireProgressionWorkflow->apply($formulaireProgression, $to);
        } catch (LogicException $exception) {
            echo $exception->getMessage();
        }
        
        $entityManager->persist($formulaireProgression);
        $entityManager->flush();
    
        return $this->redirectToRoute('formulaire_progression', ['id' => $formulaireProgression->getId()]);
    }
}
