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
                    'controller' => new Controller(),
                    'action' => 'handleRequest',
                ],
                'POST' => [
                    'controller' => new Controller(),
                    'action' => 'handleRequest',
                ],
            ],
            '/about' => [
                'GET' => [
                    'controller' => new Controller(),
                    'action' => 'handleRequest',
                ],
                'POST' => [
                    'controller' => new Controller(),
                    'action' => 'handleRequest',
                ],
            ],
            '/exercises' => [
                'GET' => [
                    'controller' => new Controller(),
                    'action' => 'handleRequest',
                ],
            ],
        ];
    }
}