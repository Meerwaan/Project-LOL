<?php

namespace App\Controller;

use App\Entity\Champion;
use App\Form\ChampionType;
use App\Repository\ChampionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/create/champion")
 */
class CreateChampionController extends AbstractController
{
    /**
     * @Route("/", name="create_champion_index", methods={"GET"})
     */
    public function index(ChampionRepository $championRepository): Response
    {
        return $this->render('create_champion/index.html.twig', [
            'champions' => $championRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="create_champion_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $champion = new Champion();
        $form = $this->createForm(ChampionType::class, $champion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($champion);
            $entityManager->flush();

            return $this->redirectToRoute('create_champion_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('create_champion/new.html.twig', [
            'champion' => $champion,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="create_champion_show", methods={"GET"})
     */
    public function show(Champion $champion): Response
    {
        return $this->render('create_champion/show.html.twig', [
            'champion' => $champion,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="create_champion_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Champion $champion): Response
    {
        $form = $this->createForm(ChampionType::class, $champion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('create_champion_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('create_champion/edit.html.twig', [
            'champion' => $champion,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="create_champion_delete", methods={"POST"})
     */
    public function delete(Request $request, Champion $champion): Response
    {
        if ($this->isCsrfTokenValid('delete'.$champion->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($champion);
            $entityManager->flush();
        }

        return $this->redirectToRoute('create_champion_index', [], Response::HTTP_SEE_OTHER);
    }
}
