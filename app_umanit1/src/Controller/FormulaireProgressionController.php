<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormulaireProgressionController extends AbstractController
{
    /**
     * @Route("/formulaire/progression", name="formulaire_progression")
     */
    public function index(): Response
    {
        return $this->render('formulaire_progression/index.html.twig', [
            'controller_name' => 'FormulaireProgressionController',
        ]);
    }
}
