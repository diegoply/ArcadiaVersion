<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Entity\Habitat;
use App\Entity\RapportVeterinaire;
use App\Repository\AnimalRepository;
use App\Repository\HabitatRepository;
use App\Repository\ImageRepository;
use App\Repository\RapportVeterinaireRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PageController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('index.html.twig', [
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
    public function habitats(HabitatRepository $habitatRepository, AnimalRepository $animalRepository, RapportVeterinaireRepository $rapportVeterinaireRepository): Response
    {
        $habitats = $habitatRepository->findAll();
        $animal = $animalRepository->findAll();
        $rapport = $rapportVeterinaireRepository->findAll();

       
        
        return $this->render('page/Habitats.html.twig', [
            'habitats' => $habitats,
           
            
           
        ]);
    }

    #[Route('/Habitats/{id}', name: 'app_AnimauxInHabitat')]
    public function AnimauxInHabitat( Habitat $habitat): Response
    {
        //dump($habitat);
        //dump($animal);

        return $this->render('partials/_animauxInHabitat.html.twig', [
            
            'habitats' => $habitat,
            //'animals' => $animal,
        ]);
    }

    #[Route('/Habitats/{id}/animal', name: 'app_Rapport')]
    public function Rapport( Animal $animal): Response
    {

       
        //dump($habitat);
        //dump($animal);
       
        

        return $this->render('partials/_rapportVeterinaire.html.twig', [
            //'habitat' => $habitat,
            'animals' => $animal,
            //'rapport' => $rapportVeterinaire, 
           
        ]);
    }

    #[Route('/Services', name: 'app_Services')]
    public function services(): Response
    {
        return $this->render('page/Services.html.twig');
    }

    
    
}

