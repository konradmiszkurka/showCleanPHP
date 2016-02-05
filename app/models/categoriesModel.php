<?php

class categoriesModel extends db{

    public function getCategoryById($id)
    {
        return $this->fetchOne('select * from categories where id = ' . $id);
    }

    public function getAllCategories()
    {
        return $this->fetchAll('select * from categories');
    }

    public function newCategory($name, $description)
    {
        return $this->insert('categories', array(
            'name'      => $name,
            'description'     => $description
        ));
    }
}