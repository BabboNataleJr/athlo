<?php

class Controller
{

    private $exercise;

    private $author;

    public function __construct($author, $exercise)
    {
        $this->author = $author;
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

    public function edit()
    {
        // edit the exercise if POST or return the edit page if get
        $http_metod = strtolower($_SERVER['REQUEST_METHOD'] ?? 'GET');

        // update the existing exercise
        if($http_metod == 'post')
        {
            // use the exercise data sent to update the one existent
            if ($_POST['exercise'])
            {
                
            }
        }
        elseif ($http_metod == 'get')
        {
            // return the page variables to show the edit template
            if ($_GET['exerciseId'])
            {

            }
        }
    }
}