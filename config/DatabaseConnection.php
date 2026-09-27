<?php

class DatabaseConnection
{
    public static function getConnection()
    {
        $host = '192.168.56.56:3306';
        $username = 'homestead';
        $password = 'secret';
        $dbname = 'pallavolo';

        try
        {
            return new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password,[
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);
        }
        catch(PDOException $e)
        {
            die('Connection failed: ' . $e->getMessage());
        }
    }
}