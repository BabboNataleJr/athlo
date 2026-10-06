<?php

class DatabaseTable
{
    private $pdo;

    private $tableName;

    private $primaryKey;

    public function __construct($pdo, $tableName, $primaryKey)
    {
        $this->pdo = $pdo;
        $this->tableName = $tableName;
        $this->primaryKey = $primaryKey;
    }

    public function query($sql, $parameters = [])
    {
        $result = $this->pdo->prepare($sql);
        $result->execute($parameters);

        return $result;
    }
    
    public function findAllExercises()
    {
        $res = $this->query('SELECT * FROM ' . $this->tableName . ';');

        return $res->fetchAll();
    }

    public function findByValue($value)
    {
        $q = 'SELECT * FROM `'. $this->tableName .'` WHERE ' . $this->primaryKey . ' = :value;';

        $params = [
            'value' => $value,
        ];

        $result = $this->query($q, $params);
        return $result->fetch();
    }

    public function save($record)
    {
        try
        {
            $this->pdo->insert($record);
        }
        catch(Exception $e)
        {
            // silently ignore
        }
    }
}