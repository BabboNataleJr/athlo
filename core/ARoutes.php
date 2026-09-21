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
        ];
    }
}