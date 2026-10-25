<?php

// AthloRoutes si include come dipendenza di EntryPoint
// include_once __DIR__ . '/../core/AthloRoutes.php';
// include_once __DIR__ . '/../core/EntryPoint.php';

include_once __DIR__ . '/../Core/autoloader.php';;

$route = ltrim(strtok($_SERVER['REQUEST_URI'], '?'), '/');

$entryPoint = new \Core\EntryPoint($route, new \Core\AthloRoutes(), $_SERVER['REQUEST_METHOD']);
$entryPoint->run();

?>