<?php 

include_once __DIR__ . '/../controllers/Controller.php';

class Router {

    public function __construct() {
        // Constructor logic here
    }

    public function route($request) 
    {
        // Routing logic here
        $routes = [
            '/' => 'HomeController',
            '/about' => 'AboutController',
            // Add more routes as needed
        ];

        echo "Routing request: " . $request . "\n";
    }

}
