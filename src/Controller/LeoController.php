<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LeoController extends AbstractController
{
    /**
     * @Route("/", name="")
     */
    public function index(): Response
    {
        return $this->render('leo/index.html.twig', [
            'controller_name' => 'LeoController',
        ]);
    }
    /**
     * @Route("/l", name="l")
     */
    public function portfolio(): Response
    {
        return $this->render('leo/portfolio.html.twig', [
            'controller_name' => 'LeoController',
        ]);
    }
}
