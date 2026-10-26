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
        // $authorTable = new DatabaseTable($pdo, 'author', 'id');

        // load the controller
        $exerciseController = new \Controllers\ExerciseController($exerciseTable);

        return [
            '' => [
                'GET' => [
                    'controller' => $exerciseController,
                    'action' => 'home',
                ],
            ],
            'about' => [
                'GET' => [
                    'controller' => $exerciseController,
                    'action' => 'about',
                ],
            ],
            'exercises/list' => [
                'GET' => [
                    'controller' => $exerciseController,
                    'action' => 'listAllExercises',
                ],
            ],
            'exercise/edit' => [
                'GET' => [
                    'controller' => $exerciseController,
                    'action' => 'showEdit',
                ],
                'POST' => [
                    'controller' => $exerciseController,
                    'action' => 'saveEdit'
                ],
            ],
            'exercise/create' => [
                'GET'=> [
                    'controller' => $exerciseController,
                    'action' => 'showCreate',
                ],
                'POST'=> [
                    'controller' => $exerciseController,
                    'action' => 'saveCreate',
                ],
            ],
            'exercise/delete' => [
                'POST' => [
                    'controller' => $exerciseController,
                    'action' => 'deleteExercise',
                ]
            ],
        ];
    }
}