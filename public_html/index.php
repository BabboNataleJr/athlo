<?php

include_once __DIR__ . '/../core/AthloRoutes.php';
// include_once __DIR__ . '/../core/View.php';
include_once __DIR__ . '/../core/EntryPoint.php';

$route = ltrim(strtok($_SERVER['REQUEST_URI'], '?'), '/');

$entryPoint = new EntryPoint($route, new AthloRoutes(), $_SERVER['REQUEST_METHOD']);
$entryPoint->run();

// echo "Route: $route. Method: $method;";

// $routes = new ARoutes();
// $view = new View();

// $router = new Router($route, $method, $routes, $view);

// $router->run();

?>