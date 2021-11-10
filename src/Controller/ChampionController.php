<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChampionController extends AbstractController
{
    /**
     * @Route("/champions/{champions}", name="champion")
     */
    public function index(): Response
    {
        return $this->render('champion/index.html.twig');

    }
}
