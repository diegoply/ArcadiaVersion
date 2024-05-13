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
        return $this->render('page/index.html.twig', [
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
<<<<<<< HEAD
    public function habitats(HabitatRepository $habitatRepository, AnimalRepository $animalRepository,): Response
=======
    public function habitats(HabitatRepository $habitatRepository, AnimalRepository $animalRepository, RapportVeterinaireRepository $rapportVeterinaireRepository): Response
>>>>>>> develop
    {
        $habitats = $habitatRepository->findAll();
        $animal = $animalRepository->findAll();
        $rapport = $rapportVeterinaireRepository->findAll();

        dump($habitats);
        dump($animal);
        
        return $this->render('page/Habitats.html.twig', [
            'habitats' => $habitats,
            //'animals' => $animal,
            
           
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
<<<<<<< HEAD
    public function Rapport( Animal $animal,  RapportVeterinaireRepository $rapportVeterinaire, EntityManagerInterface $entityManager): Response
    {
        $animalRepository = $entityManager->getRepository(Animal::class);

        $animalId = 1;
        $animal = $animalRepository->find($animalId);
        $rapport = $rapportVeterinaire->findAll();
        //dump($habitat);
        dump($animal);
        dump($rapport);
        
=======
    public function Rapport( Animal $animal): Response
    {

       
        //dump($habitat);
        dump($animal);
       
>>>>>>> develop
        

        return $this->render('partials/_rapportVeterinaire.html.twig', [
            //'habitat' => $habitat,
            'animals' => $animal,
<<<<<<< HEAD
            'rapport' => $rapport,
          
=======
            //'rapport' => $rapportVeterinaire, 
>>>>>>> develop
           
        ]);
    }

    #[Route('/Services', name: 'app_Services')]
    public function services(): Response
    {
        return $this->render('page/Services.html.twig');
    }

    
    
}

