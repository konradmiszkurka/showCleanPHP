<?php

class categoriesController extends controller
{
    public function showAction($id)
    {
        $modelCategory  = new categoriesModel();
        $model          = new productsModel();

        $this->view->set('category', $modelCategory->getCategoryById($id));
        $this->view->set('products', $model->getCategoryById($id));

        $this->view->render('categories/show.phtml');
    }

}