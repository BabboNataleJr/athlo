<?php

include_once __DIR__ . '/../core/Router.php';
include_once __DIR__ . '/../core/ARoutes.php';
include_once __DIR__ . '/../core/View.php';

$route = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

$routes = new ARoutes();
$view = new View();

$router = new Router($route, $method, $routes, $view);

echo "Received request: " . $request . " with method: " . $method . "\n";

$router->route($request);



?>