<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use Vich\UploaderBundle\Form\Type\VichImageType;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;

class ProductCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Product::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id', 'test')->onlyOnDetail(),
            DateField::new('updatedAt')->onlyOnDetail(),
            AssociationField::new('country', 'Pays'),
            AssociationField::new('category'),
            TextField::new('imageFile')->setFormType(VichImageType::class),
            ImageField::new('image')->setBasePath('images/products')->setUploadDir('public/images/products'),
            TextField::new('name', 'Nom du produit ou service'),
            TextField::new('subTitle', 'Sous-titre'),
            NumberField::new('price', 'prix'),
            TextEditorField::new('description'),
        ];
    }
}
