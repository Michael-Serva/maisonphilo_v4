<?php

namespace App\Controller\Admin;

use App\Entity\Hospital;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CountryField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TelephoneField;

class HospitalCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Hospital::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [

            BooleanField::new('isValid'),
            AssociationField::new('country'),
            TextField::new('name'),
            TextField::new('subTitle'),
            TextEditorField::new('content'),
            TelephoneField::new('phoneNumber'),
            EmailField::new('email'),
        ];
    }
}
