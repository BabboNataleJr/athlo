<?php

class AthloRoutes
{
    public function __construct()
    {
        // Constructor logic here
    }

    public function getRoutes()
    {
        include_once __DIR__ . '/../config/DatabaseConnection.php';
        include_once __DIR__ . '/../config/DatabaseTable.php';
        include_once __DIR__ . '/../controllers/ExerciseController.php';

        $pdo = DatabaseConnection::getConnection();
        
        $exerciseTable = new DatabaseTable($pdo, 'esercizio', 'id');
        // $authorTable = new DatabaseTable($pdo, 'author', 'id');

        $exerciseController = new ExerciseController($exerciseTable);

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