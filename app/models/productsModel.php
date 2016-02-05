<?php

class productsModel extends db
{
    public function getProductById($id)
    {
        return $this->fetchOne('select * from products where id = ' . $id);
    }

    public function getAllProducts()
    {
        return $this->fetchAll('select * from products');
    }

    public function newProduct($name, $price)
    {
        return $this->insert('products', array(
            'name'      => $name,
            'price'     => $price
        ));
    }
}