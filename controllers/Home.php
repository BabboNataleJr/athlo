<?php 

include_once __DIR__ . '/../config/DatabaseConnection.php';

class Home extends Controller
{
    private $exs_author;

    private $db_table;

    // public function __construct($dbtable, $exsauthor)
    public function __construct()

    {
        // Constructor logic here
        // $this->exs_author = $exsauthor;
        // $this->db_table = $dbtable;
    }

    public function handleGetRequest()
    {
        // retrieve all the exercises list

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