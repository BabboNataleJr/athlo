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
        // return the $page variable(s)
    }

    public function listAllExercises()
    {
        //
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