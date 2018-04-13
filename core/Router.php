<?php

class Router
{

    public $routers = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file)
    {
        $router = new static;

        require $file;

        return $router;

    }

    // public function define($routes)
    // {
    //     $this->routes = $routes;

    // }

    
    public function get($uri, $controller)
    {

        $this->routes['GET'][$uri] = $controller;

    }


    public function post($uri, $controller)
    {

        $this->routes['POST'][$uri] = $controller;

    }


    public function direct($uri, $requestType)
    {
        try{
            if (array_key_exists($uri, $this->routes[$requestType])){
                
                return $this->routes[$requestType][$uri];

            }  else {
                throw new Exception ($uri);
            }       
        } catch (Exception $e) {
                // Print PDOException message
                echo "Página inexistente do echo! - ['" . $e->getMessage(). "']";

        } 
    }
}