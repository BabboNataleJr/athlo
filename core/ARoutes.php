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
                    'controller' => new HomeController(),
                    'action' => 'show',
                ],
                'POST' => [
                    'controller' => new HomeController(),
                    'action' => 'submit',
                ],
            ],
            '/about' => [
                'GET' => [
                    'controller' => new AboutController(),
                    'action' => 'show',
                ],
                'POST' => [
                    'controller' => new AboutController(),
                    'action' => 'submit',
                ],
            ],
            '/exercises' => [
                'GET' => [
                    'controller' => new ExercisesController(),
                    'action' => 'show',
                ],
            ],
        ];
    }
}