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
}
