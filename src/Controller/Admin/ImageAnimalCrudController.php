<?php

namespace App\Controller\Admin;

use App\Entity\ImageAnimal;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class ImageAnimalCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ImageAnimal::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        yield TextField::new('imageName');
        yield ImageField::new('imageName')->setBasePath('images/image/')->hideOnForm();
        yield TextareaField::new('imageFile')->setFormType(VichImageType::class)->hideOnIndex();
    }
    
}
