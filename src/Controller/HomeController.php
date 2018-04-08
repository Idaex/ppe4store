<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController{
    /**
     * @Route("/",name="accueil")
     * @return Response
     */
    public function accueilAbsence() {
        return new Response("Je suis absent le ...");
    }
}