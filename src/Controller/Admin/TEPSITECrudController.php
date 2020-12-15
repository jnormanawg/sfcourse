<?php

namespace App\Controller\Admin;

use App\Entity\TEPSITE;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class TEPSITECrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TEPSITE::class;
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
