<?php

class ExerciseController
{

    private $exercise;

    // private $author;

    public function __construct($exercise)
    {
        // $this->author = $author ?? [];
        $this->exercise = $exercise;
    }

    public function home()
    {
        $exercises = $this->exercise->findAllExercises();
        // return the $page variable(s)
        $page = [
            'title' => 'Home Page',
            'template' => 'home.html',
            'variables' => [
                // 'message' => 'Welcome to Athlo!',
                'exercises' => $exercises ?? [],
            ],
        ];

        return $page;
    }

    public function listAllExercise()
    {
        $exercises = $this->exercise->findAllExercises();

        $page = [
            'title' => 'All exercise',
            'template' => 'exercises.html',
            'variables' => [
                'message' => '',
                'exercises' => $exercises ?? [],
            ],
        ];

        return $page;
    }

    public function about()
    {
        $page = [
            'title' => 'About us',
            'template' => 'about.html',
            'variables' => [
                'message' => 'Find more about us',
            ],
        ];

        return $page;
    }

    public function showEdit()
    {
        if (isset($_GET['id']))
        {
            $exeId = $_GET['id'];
            $exercise = $this->exercise->findByValue($exeId);
            
            $page = [
                'title' => 'Edit the exercise',
                'template' => 'edit.html',
                'variables' => [
                    'exercise' => $exercise,
                ],
            ];
        }
    }

    public function saveEdit()
    {
        if (isset($_POST['exercise']))
        {
            $exercise = $_POST['exercise'];
            // TODO: create the save method in Exercise
            $this->exercise->save($exercise);
        }
    }
       
}