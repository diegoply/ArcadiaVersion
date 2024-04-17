<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PageController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('page/Accueil.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/headerdesktop', name: 'header_desktop')]
    public function headerDesktop(): Response
    {
        return $this->render('partials/_headerdesktop.html.twig');
    }

    #[Route('/headerphone', name: 'header_phone')]
    public function headerPhone(): Response
    {
        return $this->render('partials/_headerphone.html.twig');
    }

    #[Route('/Habitats', name: 'app_habitats')]
    public function habitats(): Response
    {
        return $this->render('page/Habitats.html.twig');
    }

    #[Route('/Services', name: 'app_Services')]
    public function services(): Response
    {
        return $this->render('page/Services.html.twig');
    }
}

