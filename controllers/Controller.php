<?php

abstract class Controller
{

    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    abstract function handleGetRequest();
    abstract function handlePostRequest();
}