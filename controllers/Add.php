<?php 

class Add extends Controller
{
    public function handleGetRequest()
    {
         // Handle the request and return a response
        $page = [
            'title' => 'Add an exercise',
            'template' => 'add.html',
            'variables' => [
                'message' => 'Here add your exercise',
            ],
        ];
        return $page;
    }

    private function insertExercise($data)
    {
        $insert_query = 'INSERT INTO `esercizio` (`name`, `descrizione`, `immagine`) VALUES (:nome, :descrizione, :immagine)';
        $stmts = $this->pdo->prepare($insert_query);
        $stmts->bindValue(':nome', $data['name']);
        $stmts->bindValue(':descrizione', $data['descrizione']);
        $stmts->bindValue(':immagine', $data['immagine']);
        $stmts->execute();

        return $stmts->rowCount() > 0;
    }

    public function handlePostRequest()
    {
        // validation and sanitization of the input data
        // TODO

        $name = $_POST['name'] ?: 'N/A';
        $descrizione = $_POST['descrizione'] ?: 'N/A';
        $immagine = $_POST['immagine'] ?: 'N/A';

        $data = [
            'name' => $name,
            'descrizione' => $descrizione,
            'immagine' => $immagine,
        ];

        echo "<pre>" . print_r($data, true) . "</pre>";

        if (!$this->insertExercise($data))
        {
            echo "Something went wrong while adding the exercise, please, try again.";
        }

        header('Location: /');
        exit();
    }
}