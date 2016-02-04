<?php

class app
{
    private $router;

    public function __construct($router)
    {
        $this->router = $router;
    }

    public function run()
    {
        $file_name = 'app/controllers/' . $this->router['controller'] . '.php';

        if(file_exists($file_name)){
            include $file_name;

            $class_name  = $this->router['controller'];
            $method_name = $this->router['method'];

            if(class_exists($class_name)) {
                $class = new $class_name();

                if(method_exists($class, $method_name)) {
                    return call_user_func_array(array($class, $method_name), $this->router['params']);
                } else {
                    echo 'Brak metody: ' . $method_name; die;
                }
            } else {
                echo 'Brak klasy: ' . $class_name;
            }
        } else {
            echo 'Brak pliku: ' . $file_name; die;
        }
    }

}