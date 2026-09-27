<?php

include_once __DIR__ . '/../core/Router.php';
include_once __DIR__ . '/../core/ARoutes.php';
include_once __DIR__ . '/../core/View.php';
include_once __DIR__ . '/../config/DatabaseConnection.php';

$pdo = DatabaseConnection::getConnection();
$route = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

echo "Route: $route. Method: $method;";

$routes = new ARoutes();
$view = new View();

$router = new Router($route, $method, $routes, $view, $pdo);

$router->run();

?>