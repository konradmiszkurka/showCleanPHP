<?php

class categoriesController{

    public function showAction($id){

        $modelCategory = new categoriesModel();
        $model = new productsModel();

        echo '<pre>';
        var_dump($modelCategory->getCategoryById($id));
        var_dump($model->getCategoryById());

    }

}