<?php

// the autoloader now includes all the classes
include_once __DIR__ . '/../Core/autoloader.php';

$route = ltrim(strtok($_SERVER['REQUEST_URI'], '?'), '/');

$entryPoint = new \Core\EntryPoint($route, new \Core\AthloRoutes(), $_SERVER['REQUEST_METHOD']);
$entryPoint->run();

?>