<?php 

include_once __DIR__ . '/../controllers/Controller.php';
include_once __DIR__ . '/../controllers/Home.php';
include_once __DIR__ . '/../controllers/About.php';
include_once __DIR__ . '/../controllers/Exercise.php';
include_once __DIR__ . '/../controllers/Add.php';


class Router {

    private $route;
    private $method;
    private $routes;
    private $view;

    private $pdo;

    public function __construct($route, $method, $routes, $view, $pdo) 
    {
        // Constructor logic here
        $this->route = $route;
        $this->method = $method;
        $this->routes = $routes;
        $this->view = $view;
        $this->pdo = $pdo;
    }

    public function route($request) 
    {
        // Routing logic here
        // $routes = [
        //     '/' => 'HomeController',
        //     '/about' => 'AboutController',
        //     // Add more routes as needed
        // ];

        // echo "Routing request: " . $request . "\n";
    }

    public function run()
    {
        $routes = $this->routes->getRoutes();

        $controller = new $routes[$this->route][$this->method]['controller']($this->pdo);
        $action = $routes[$this->route][$this->method]['action'];

        $page = $controller->$action();

        $title = $page['title'];

        if (isset($page['variables']))
        {
            $output = $this->view->render($page['template'], $page['variables']);
        }
        else 
        {
            $output = $this->view->render($page['template']);
        }

        include __DIR__ . '/../views/layout.html.php';
    }

}
