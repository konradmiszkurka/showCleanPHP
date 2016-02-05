<?php

/**
 * Class productsController
 */
class productsController extends controller
{
    public function showAction($id)
    {
        $model = new productsModel();
        // $model->newProduct('Produkt = ' . time(), rand());
       // var_dump($model->getProductById($id));
        // var_dump($model->getAllProducts());

        $this->view
            ->set('product', $model->getProductById($id))
            ->render('products/show.phtml');
    }
}