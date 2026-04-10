<?php 

include_once __DIR__ . '/../controllers/Controller.php';

class Router {

    private $route;
    private $method;
    private $routes;
    private $view;

    public function __construct($route, $method, $routes, $view) {
        // Constructor logic here
        $this->route = $route;
        $this->method = $method;
        $this->routes = $routes;
        $this->view = $view;
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

    public function run()
    {
        $routes = $this->routes->getRoutes();

        $controller = $routes[$this->route][$this->method]['controller'];
        $action = $routes[$this->route][$this->method]['action'];

        $page = $controller->action();

        $title = $page['title'];

        if (isset($page['variables']))
        {
            $output = $this->view->render($page['template'], $page['variables']);
        }
        else 
        {
            $output = $this->view->render($page['template']);
        }

        include __DIR__ . '/../views/layout.php';
    }

}
