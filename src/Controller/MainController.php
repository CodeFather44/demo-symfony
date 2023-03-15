<?php

namespace App\Controller;
use \Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
//    /**
//     * @Route("/home", name="main_home")
//     */
    #[Route('/',name: "main_home")]
    public function home(){
       return $this->render('main/home.html.twig');
    }

//    /**
//     * @Route("/test",name="main_test")
//     */
    #[Route("/test",name: "main_test")]
    public function test(){
        $film = [
            'title'=>'<b>Avatar</b>',
            'year'=> 2022
        ];
        return $this->render('main/test.html.twig',[
            'monFilm'=>$film,
            'autreVariable'=>123456
        ]);
    }
}