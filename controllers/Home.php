<?php 

class Home extends Controller
{
    // private $exs_author;

    // private $db_table;

    // public function __construct($dbtable, $exsauthor)
    // public function __construct()
    // {
        // Constructor logic here
        // $this->exs_author = $exsauthor;
        // $this->db_table = $dbtable;
    // }

    private function getAllExercises()
    {
        $all_exercises_query = "SELECT * FROM `esercizio`";

        $stmts = $this->pdo->query($all_exercises_query);
        $stmts->execute();

        $exercises = $stmts->fetchAll();

        return $exercises;
    }

    public function handleGetRequest()
    {
        // retrieve all the exercises 
        $exercises = $this->getAllExercises();

        // echo "<pre>" . print_r($exercises, true) . "</pre>";

        // Handle the request and return a response
        $page = [
            'title' => 'Home Page',
            'template' => 'home.html',
            'variables' => [
                'message' => 'Welcome to Athlo!',
                'exercises' => $exercises ?? [],
            ],
        ];
        return $page;
    }

    public function handlePostRequest()
    {
        $page = [];
        return $page;
    }
}