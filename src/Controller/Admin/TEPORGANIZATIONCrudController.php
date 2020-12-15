<?php

namespace App\Controller\Admin;

use App\Entity\TEPORGANIZATION;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class TEPORGANIZATIONCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TEPORGANIZATION::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
