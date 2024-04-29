<?php

namespace App\Controller\Admin;

use App\Entity\Image;
use DateTime;
use DateTimeImmutable;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class ImageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Image::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
         [
            
            //IdField::new('id'),
            yield TextField::new('imageName'),
            //TextField::new('imageSize'),
            yield ImageField::new('imageName')->setBasePath('images/image/')->hideOnForm(),
            yield TextareaField::new('imageFile')->setFormType(VichImageType::class)->hideOnIndex()
        
        ];
    }
    
}
