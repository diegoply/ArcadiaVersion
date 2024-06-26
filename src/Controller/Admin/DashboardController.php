<?php

namespace App\Controller\Admin;

use App\Entity\Animal;
use App\Entity\Habitat;
use App\Entity\Image;
use App\Entity\ImageAnimal;
use App\Entity\Race;
use App\Entity\RapportVeterinaire;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        return $this->render('admin/dashboard.html.twig');

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Arcadia2');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');    
        yield MenuItem::linkToCrud('Races', 'fa-solid fa-paw', Race::class);
        yield MenuItem::linkToCrud('Images Habitat', 'fa-regular fa-images', Image::class);
        yield MenuItem::linkToCrud('habitats', 'fa-solid fa-panorama', Habitat::class);
        yield MenuItem::linkToCrud('Animals', 'fa-solid fa-horse', Animal::class);
        yield MenuItem::linkToCrud('Rapport Vétèrinaire', 'fa-brands fa-dochub', RapportVeterinaire::class);
        yield MenuItem::linkToCrud('Animal Image', 'fa-brands fa-otter', ImageAnimal::class);
  
    }   
}
