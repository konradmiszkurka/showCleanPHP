<?php

class productsController
{
    public function showAction($id)
    {
        $model = new productsModel();

        echo '<pre>';
        $model->newProduct('Produkt = ' . time(), rand());

        var_dump($model->getProductById($id));
        var_dump($model->getAllProducts());
    }
}