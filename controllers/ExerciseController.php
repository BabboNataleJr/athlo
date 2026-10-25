<?php
namespace Controllers;

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

    public function listAllExercises()
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

        return $page;
    }

    public function saveEdit()
    {
        if (isset($_POST['exercise']))
        {
            $exercise_data = $_POST['exercise'];

            // check if an exercise does really exists
            $exercise = $this->exercise->findByValue($exercise_data['id']);

            // if exists 
            if ($exercise)
            {
                // update it
                $this->exercise->update($exercise_data);
            }
            else
            {
                // otherwise save a new exercise(? to be thought on better)
                $this->exercise->save($exercise);
            }

            header('Location: /');
            exit;
        }
    }

    public function showCreate()
    {
        $page = [
            'title'=> 'Create a new Exercise',
            'template' => 'create.html',
            'variables' => [
                'message'=> 'Create your new exercise to add to the list',
            ],
        ];

        return $page;
    }

    public function saveCreate()
    {
        if (isset($_POST['exercise']))
        {
            $exercise = $_POST['exercise'];

            // todo: check that everything is filled and ready/safe to be saved
            if ($exercise)
            {
                $this->exercise->save($exercise);
            }

            header('Location: /');
            exit;
        }
    }

    public function deleteExercise()
    {
        if(isset($_POST['exercise']))
        {
            $exercise_data = $_POST['exercise'];
            $exercise = $this->exercise->findByValue($exercise_data['id']);

            if ($exercise)
            {
                $this->exercise->deleteById($exercise['id']);
            }
        }

        // retrieve the url that called the delete
        $starting_url = $_SERVER['HTTP_REFERER'] ?? '/';
        // redirect the customer to the calling url when availble
        header('Location: ' . $starting_url);
        exit;
    }
       
}