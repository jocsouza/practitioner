<?php

// $query =  require 'core/bootstrap.php';

// $routes = new Router;

// require 'routes.php';

// $uri = trim($_SERVER["REQUEST_URI"],'/');

// require $routes->direct($uri);

require 'vendor/autoload.php';

require 'core/bootstrap.php';

$router = Router::load('routes.php');

require $router->direct(Request::uri(), Request::method());


