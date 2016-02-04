<?php


class router{

    public function get(){
        $Server    = ( substr($_SERVER['REQUEST_URI'],0,1) == '/' ) ? substr($_SERVER['REQUEST_URI'],1) : $_SERVER['REQUEST_URI']; //PATH_INFO
        $Server    = ( substr($Server,1) == '/' ) ? substr($Server,0,-1) : $Server;
        $vars = explode('/', $Server);

        $controller = 'indexController';
        $method = 'indexAction';

        if(isset($vars[0]) and !empty($vars[0])){

            $controller = $vars[0] . 'Controller';

        }

        if(isset($vars[1])){

            $method = $vars[1] . 'Action';

        }

        unset($vars[0],$vars[1]);

        return array(
            'controller' => $controller,
            'method' => $method,
            'params' => $vars,
        );

    }

}
