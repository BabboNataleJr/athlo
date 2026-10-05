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
                    'controller' => 'Controller',
                    'action' => 'home',
                ],
                // 'POST' => [
                //     'controller' => 'Home',
                //     'action' => 'handlePostRequest',
                // ],
            ],
            '/about' => [
                'GET' => [
                    'controller' => 'Controller',
                    'action' => 'about',
                ],
                // 'POST' => [
                //     'controller' => 'About',
                //     'action' => 'handlePostRequest',
                // ],
            ],
            '/exercises' => [
                'GET' => [
                    'controller' => 'Controller',
                    'action' => 'listAllExercises',
                ],
            ],
            '/exercise/create' => [
                'GET' => [
                    'controller' => 'Exercise',
                    'action' => 'handleShowCreateForm',
                ],
                'POST' => [
                    'controller' => 'Exercise',
                    'action' => 'handleCreateExercise',
                ],
            ],
            '/exercise/{id}' => [
                'GET' => [
                    'controller' => 'Exercise',
                    'action' => 'handleShowExercise',
                ],
                'POST' => [
                    'controller' => 'Exercise',
                    'action' => 'handleUpdateExercise',
                ],
            ],
            '/exercise/{id}/delete' => [
                'POST' => [
                    'controller' => 'Exercise',
                    'action' => 'handleRemoveExercise',
                ],
            ],
            '/exercise/{id}/edit' => [
                'GET' => [
                    'controller' => 'Exercise',
                    'action' => 'handleEditExercise',
                ],
                'POST' => [
                    'controller' => 'Exercise',
                    'action' => 'handleUpdateExercise',
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