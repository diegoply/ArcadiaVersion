<?php

namespace App\Controller\Admin;

use App\Entity\RapportVeterinaire;
use DateTime;
use DateTimeInterface;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class RapportVeterinaireCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return RapportVeterinaire::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        yield AssociationField::new('animal');
        yield DateTimeField::new('date');
        yield TextareaField::new('detail');

    }
    
}
