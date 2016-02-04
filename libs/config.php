<?php

class config {
    private $data = array();

    public function __construct($name)
    {
       $filename = 'app/config/' . $name . '.php';

        if(file_exists($filename)){
            $this->data = include $filename;
        }
    }

    public function get($name){
            if(isset($this->data[$name])){
                echo $this->data[$name];
            }
        return null;
    }

}