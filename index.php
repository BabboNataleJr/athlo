<?php

// include_once '/../config/DatabaseConnection.php';

include_once __DIR__ . '/../core/Router.php';

$router = new Router();
$request = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

echo "Received request: " . $request . " with method: " . $method . "\n";

$router->route($request);

?>