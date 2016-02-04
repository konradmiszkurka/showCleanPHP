<?php

class productsController
{
    public function showAction($id = 1, $name = 'dupa')
    {
        echo 'id = ' . $id . '<br>';
        echo 'name = ' . $name;
    }
}