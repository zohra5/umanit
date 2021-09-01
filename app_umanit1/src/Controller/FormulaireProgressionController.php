<?php

namespace App\Controller;

use App\Entity\FormulaireProgression;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\FormulaireProgressionType;
use App\Form\UserType;
use App\Repository\FormulaireProgressionRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\User\UserInterface;

class FormulaireProgressionController extends AbstractController
{
    /**
     * @Route("/home/formulaire/progression/{id}", name="formulaire_progression", requirements={"id"="\d+"})
     */
    public function index(Request $request, $id = 'create', FormulaireProgressionRepository $formulaireProgressionRepository): Response
    {
        // $action = $request->get('action');
        // /** @var User $user */
        $user = $this->getUser();
        // if(!in_array("COLLABORATEUR", $user->getRoles())) {
        //     $this->redirectToRoute("home");
        // }
        $entityManager = $this->getDoctrine()->getManager();
        $formulaireProgression = null;
        if ($id != 'create') {
            $formulaireProgression = $formulaireProgressionRepository->find($id);
        }
        $form = $this->createForm(FormulaireProgressionType::class, $formulaireProgression);

        $form->handleRequest($request);
       
        if ($form->isSubmitted() && $form->isValid()) {
            // /** @var FormulaireProgression $formulaireProgression */
            $formulaireProgression = $form->getData();
            // $formulaireProgression->setManager($user);
            // $user->addFormulaireProgressionAsManager($formulaireProgression);

            /*if(!$formulaireProgression->getStatus()) {
                $formulaireProgression->setStatus("TO_COMPLETE");
            } else if($formulaireProgression->getStatus() == "TO_COMPLETE" && $action="save") {
                $formulaireProgression->setStatus("TO_REVIEW");
            }*/
            $this->entityManager->persist($formulaireProgression);
            $this->entityManager->persist($user);
            $this->entityManager->flush();
            // ... do your form processing, like saving the Task and Tag entities
        }

        return $this->render('formulaire_progression/index.html.twig', [
            'data' => $formulaireProgression,
            'form' => $form->createView(),
            'user' => $user
            
        ]);
    }
}
