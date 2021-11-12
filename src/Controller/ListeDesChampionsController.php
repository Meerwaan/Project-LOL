<?php

namespace App\Controller;

use App\Entity\Champion;

use App\Repository\ChampionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
class ListeDesChampionsController extends AbstractController
{



    /**
     * @Route("/liste", name="liste_des_champions")
     */

    public function index(ChampionRepository $champion): Response
    {

        $champions = $this->getDoctrine()->getRepository(Champion::class)->findAll();


        //var_dump($champions);







        return $this->render('liste_des_champions/liste.html.twig', ["champions"=>$champions]);

    }}

