<?php

class ARoutes
{
    public function __construct()
    {
        // Constructor logic here
    }

    public function getRoutes()
    {
        return [
            '/' => [
                'GET' => [
                    'controller' => 'Home',
                    'action' => 'handleGetRequest',
                ],
                'POST' => [
                    'controller' => 'Home',
                    'action' => 'handlePostRequest',
                ],
            ],
            '/about' => [
                'GET' => [
                    'controller' => 'About',
                    'action' => 'handleGetRequest',
                ],
                'POST' => [
                    'controller' => 'About',
                    'action' => 'handlePostRequest',
                ],
            ],
            '/exercises' => [
                'GET' => [
                    'controller' => 'Exercise',
                    'action' => 'handleGetRequest',
                ],
            ],
            '/add' => [
                'GET' => [
                    'controller' => 'Add',
                    'action' => 'handleGetRequest',
                ],
                'POST' => [
                    'controller' => 'Add',
                    'action' => 'handlePostRequest',
                ],
            ],
        ];
    }
}