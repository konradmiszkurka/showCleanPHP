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

    public function getCategoryById(){
        return $this->fetchAll('SELECT products.* FROM categories_products
                                LEFT JOIN products ON categories_products.product_id = products.id
                                where categories_products.category_id = 1');
    }
}