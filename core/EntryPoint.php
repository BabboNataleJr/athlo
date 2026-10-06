<?php

class EntryPoint
{

    private $route;
    
    /**
     * Instance of AthloRoutes
     * @var AthloRoutes
     */
    private $routes;

    private $method;

    public function __construct($route, $routes, $method)
    {
        $this->route = $route;
        $this->routes = $routes;
        $this->method = $method;
    }

    public function render($template, $variables = [])
    {
        // Render logic here
        extract($variables);
        ob_start();
        include __DIR__ . '/../views/' . $template . '.php';
        return ob_get_clean();
    }

    public function run()
    {
        // retrieve the routes
        $all_routes = $this->routes->getRoutes();
        
        // retrieve the controller and action
        $controller = $all_routes[$this->route][$this->method]['controller'];
        $action = $all_routes[$this->route][$this->method]['action'];

        $page = $controller->action();

        $title = $page['title'];

        if (isset($page['variables']))
        {
            // $output = $this->view->render($page['template'], $page['variables']);
            $output = $this->render($page['template'], $page['variables']);
        }
        else 
        {
            // $output = $this->view->render($page['template']);
            $output = $this->render($page['template']);
        }

        include __DIR__ . '/../views/layout.html.php';
    }
}