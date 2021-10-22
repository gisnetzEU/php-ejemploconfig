<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WelcomeController extends AbstractController{
    #[Route('/welcome', name: 'welcome')]
    public function index(): Response{
        
        //recuperando el valor del parametro
        $email = $this->getParameter('app.admin_email');
        
        $titulo = $this->getParameter('app.name');
        
        //carga la vista index y le pasa el email
        return $this->render('welcome/index.html.twig', [
            'email' => $email,
            'titulo' => $titulo
        ]);
    }
}
