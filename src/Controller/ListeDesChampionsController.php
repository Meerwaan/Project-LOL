<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListeDesChampionsController extends AbstractController
{
    /**
     * @Route("/liste", name="liste_des_champions")
     */
    public function index(): Response
    {


        return $this->render('liste_des_champions/index.html.twig');

    }}

