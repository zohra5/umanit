<?php

namespace App\Controller;

use App\Entity\FormProgress;
use App\Entity\Objective;
use App\Form\FormProgessType;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormProgressController extends AbstractController
{
    /**
     * @Route("/form/progress", name="form_progress")
     */
    public function index(Request $request): Response
    {
       
        $formProgress = new FormProgress();
        $formProgress->setDateInterview(new \DateTime("2021-02-01 11:11:22"));
        $objectives = new ArrayCollection();

        $objective = new Objective();
        $objective->setTitle("titre 1");
        $objective->setComment("comment 1");
        $objectives->add($objective);

        $objective = new Objective();
        $objective->setTitle("titre 2");
        $objective->setComment("comment 2");
        $objectives->add($objective);

        $formProgress->setObjectives($objectives);

        $form = $this->createForm(FormProgessType::class, $formProgress);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $formProgress = $form->getData();
            // ... do your form processing, like saving the Task and Tag entities
        }

        return $this->render('form_progress/index.html.twig', [
            'form' => $form->createView(),
            'formProgress' => $formProgress
        ]);
    }

    
}
