<?php

class indexController
{

    public function indexAction(){

        $modelCategory = new categoriesModel();

        echo '<pre>';
        // $modelCategory->newCategory('Dupa', 'OMG');
        var_dump($modelCategory->getAllCategories());
    }

}