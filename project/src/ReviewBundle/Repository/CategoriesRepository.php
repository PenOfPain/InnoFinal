<?php

/**
 * Created by PhpStorm.
 * User: aurel
 * Date: 09/10/2017
 * Time: 07:29
 */
namespace ReviewBundle\Repository;

class CategoriesRepository
{

    public function findAllCategories()
    {
        $categories = [
            'Phone',
            'Pc',
            'Drones',
            'Other',
        ];

        return $categories;
    }
}