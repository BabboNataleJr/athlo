<?php
namespace Config;

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

    public function findByKey($values)
    {
        if (!empty($values) && !is_array($values))
        {
            // it has only a string value
            return $this->findByValue($values);
        }

        $key = array_key_first($values);
        $value = $values[$key];

        $q = 'SELECT * FROM `'. $this->tableName .'` WHERE ' . $key . ' = :value;';

        $params = [
            'value' => $value,
        ];

        $result = $this->query($q, $params);
        return $result->fetch();
    }

    private function insert($record)
    {
        $q = 'INSERT INTO `'. $this->tableName .'` (';

        foreach($record as $key => $value)
        {
            $q .= '`'. $key .'`,';
        }

        $q = rtrim($q, ',');
        $q .= ') VALUES (';

        foreach($record as $key => $value)
        {
            $q .= ':'. $key .',';
        }

        $q = rtrim($q,',');
        $q .= ')';

        $this->query($q, $record);
    }

    public function save($record)
    {
        try
        {
            $this->insert($record);
        }
        catch(\Exception $e)
        {
            // silently ignore
        }
    }

    public function update(array $record)
    {
        $q = 'UPDATE `' . $this->tableName . '` SET ';

        foreach($record as $key => $value)
        {
            $q .= $key .'= :'. $key .',';
        }

        // remove the final comma
        $q = rtrim($q, ',');

        // complete the update query
        $q .= ' WHERE `' . $this->primaryKey . '` = :primaryKey'; 

        // set the primaryKey field
        $record['primaryKey'] = $record['id'];

        $this->query($q, $record);
    }

    public function deleteById($id)
    {
        $sql = "DELETE FROM `" . $this->tableName . "` WHERE `" . $this->primaryKey . "` = :id";
        
        $to_return = $this->query($sql, ['id' => $id]);

        return $to_return;
    }
}