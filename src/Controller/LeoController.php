<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LeoController extends AbstractController
{
    
    /**
     * @Route("/portfolio", name="portfolio")
     */
    public function portfolio(): Response
    {
        return $this->render('leo/portfolio.html.twig', [
            'controller_name' => 'LeoController',
        ]);
    }

    /**
     * @Route("/", name="")
     */
    public function accueil(): Response
    {
        return $this->render('leo/accueil.html.twig', [
            'controller_name' => 'LeoController',
        ]);
    }
}
