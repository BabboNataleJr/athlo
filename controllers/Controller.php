<?php

abstract class Controller
{
    abstract function handleGetRequest();
    abstract function handlePostRequest();
}