<?php
namespace Core;

class AthloRoutes
{
    public function __construct()
    {
        // Constructor logic here
    }

    public function getRoutes()
    {
        // get the Database Connection
        $pdo = \Config\DatabaseConnection::getConnection();
        
        // retrieve the database tables
        $exerciseTable = new \Config\DatabaseTable($pdo, 'esercizio', 'id');
        $authorTable = new \Config\DatabaseTable($pdo, 'utente', 'id');

        // load the controllers
        $exerciseController = new \Controllers\ExerciseController($exerciseTable);
        $registerController = new \Controllers\RegisterController($authorTable);

        return [
            '' => [
                'GET' => [
                    'controller' => $exerciseController,
                    'action'     => 'home',
                ],
            ],
            'about' => [
                'GET' => [
                    'controller' => $exerciseController,
                    'action'     => 'about',
                ],
            ],
            'exercises/list' => [
                'GET' => [
                    'controller' => $exerciseController,
                    'action'     => 'listAllExercises',
                ],
            ],
            'exercise/edit' => [
                'GET' => [
                    'controller' => $exerciseController,
                    'action'     => 'showEdit',
                ],
                'POST' => [
                    'controller' => $exerciseController,
                    'action'     => 'saveEdit'
                ],
            ],
            'exercise/create' => [
                'GET'=> [
                    'controller' => $exerciseController,
                    'action'     => 'showCreate',
                ],
                'POST'=> [
                    'controller' => $exerciseController,
                    'action'     => 'saveCreate',
                ],
            ],
            'exercise/delete' => [
                'POST' => [
                    'controller' => $exerciseController,
                    'action'     => 'deleteExercise',
                ]
            ],
            // REGISTERCONTROLLER
            'user/login' => [
                'GET' => [
                    'controller' => $registerController,
                    'action'     => 'showLogin',
                ],
                'POST' => [
                    'controller' => $registerController,
                    'action'     => 'checkLogin',
                ],
            ],
            'user/create' => [
                'GET' => [
                    'controller' => $registerController,
                    'action'     => 'showRegisterForm',
                ],
                'POST' => [
                    'controller' => $registerController,
                    'action'     => 'saveUser',
                ],
            ],
            'user/list' => [
                'GET'=> [
                    'controller' => $registerController,
                    'action'     => 'listAllUsers',
                ],
            ],
        ];
    }
}