<?php
namespace Config;

class DatabaseConnection
{
    public static function getConnection()
    {
        // from home
        // $host = '192.168.56.56:3306';
        // $username = 'homestead';

        // from work
        $host = '127.0.0.1';
        $username = 'root';

        $password = 'secret';
        $dbname = 'pallavolo';

        try
        {
            return new \PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password,[
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            ]);
        }
        catch(\PDOException $e)
        {
            die('Connection failed: ' . $e->getMessage());
        }
    }
}