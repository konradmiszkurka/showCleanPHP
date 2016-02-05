<?php

/**
 * Class productsModel
 */
class productsModel extends db
{
    /**
     * Get product by ID
     *
     * @param int $id
     *
     * @return object|stdClass
     */
    public function getProductById($id)
    {
        return $this->fetchOne('select * from products where id = ' . $id);
    }

    /**
     * Get all products
     *
     * @return array
     */
    public function getAllProducts()
    {
        return $this->fetchAll('select * from products');
    }

    /**
     * Add new product
     *
     * @param string $name
     * @param float $price
     *
     * @return bool
     */
    public function newProduct($name, $price)
    {
        return $this->insert('products', array(
            'name'      => $name,
            'price'     => $price
        ));
    }

    /**
     * Get products by category ID
     *
     * @param int $id
     *
     * @return array
     */
    public function getCategoryById($id){
        return $this->fetchAll('SELECT products.* FROM categories_products
                                LEFT JOIN products ON categories_products.product_id = products.id
                                where categories_products.category_id = ' . $id);
    }
}