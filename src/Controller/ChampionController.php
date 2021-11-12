<?php

namespace App\Controller;

use App\Entity\Champion;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChampionController extends AbstractController
{
    /**
     * @Route("/champions/{champions}", name="champion")
     */
    public function index($champions): Response
    {
        $champion = $this->getDoctrine()->getRepository(Champion::class)->findOneBy(["name"=>$champions]);
        return $this->render('champion/index.html.twig',["champion" => $champion]);

    }
}
