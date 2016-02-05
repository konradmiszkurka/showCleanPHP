<?php

class categoriesController{

    public function showAction($id){

        $modelCategory = new categoriesModel();

        echo '<pre>';
        var_dump($modelCategory->getCategoryById($id));

    }

}