<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function home(): Response
    {
        return $this->render('main/home.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
    * @Route("/bd", name="main_bd")
    */
    public function bd(): Response
    {
        return $this->render('main/bd.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
    * @Route("/goodies", name="main_goodies")
    */
    public function goodies(): Response
    {
        return $this->render('main/goodies.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
    * @Route("/artiste", name="main_artiste")
    */
    public function artiste(): Response
    {
        return $this->render('main/artiste.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
    * @Route("/contact", name="main_contact")
    */
    public function contact(): Response
    {
        return $this->render('main/contact.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
