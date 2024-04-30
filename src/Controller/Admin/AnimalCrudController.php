<?php

namespace App\Controller\Admin;

use App\Entity\Animal;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\Validator\Constraints\Length;

class AnimalCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Animal::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
       yield TextField::new('prenom')
            ->setFormTypeOption('constraints', [
                new Length(['max' => 50])
            ]);
       
       yield AssociationField::new('race');
       yield AssociationField::new('habitat');
       yield AssociationField::new('rapportVeterinaire');
       yield AssociationField::new('imageAnimal');
            

    }
    
}
