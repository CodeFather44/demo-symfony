<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
    #[Route('/series',name:'serie_')]

class SerieController extends AbstractController
{
    #[Route('', name: 'list')]
    public function list(): Response
    {
        //todo : aller chercher les séries en BDD

        return $this->render('serie/list.html.twig', [
            'controller_name' => 'SerieController',
        ]);
    }
    #[Route('/details/{id}', name: 'details')]
    public function details():Response{
        //todo : aller chercher la série en BDD
        return $this->render('serie/details.html.twig',[
            //passer la série à twig
        ]);
    }
    #[Route('/create',name : 'create')]
    public function create(Request $request): Response{
        dump($request);
        return $this->render('/serie/create.html.twig');
    }
}
