<?php 

include_once __DIR__ . '/../config/DatabaseConnection.php';

class Controller
{
    public function __construct() {
        // Constructor logic here
    }

    public function handleRequest() {
        // Handle the request and return a response
        $page = [
            'title' => 'Home Page',
            'template' => 'home.html',
            'variables' => [
                'message' => 'Welcome to Athlo!',
            ],
        ];
        return $page;
    }
}