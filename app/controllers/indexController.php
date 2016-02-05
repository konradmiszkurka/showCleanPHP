<?php

class indexController extends controller
{
    public function indexAction()
    {
        //$modelCategory = new categoriesModel();
        //$this->view->set('categories', $modelCategory->getAllCategories());
        $this->view->render('index/index.phtml');
    }
}