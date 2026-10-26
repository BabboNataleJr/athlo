<?php

function autoloader($classname)
{
    $filename = str_replace('\\', '/', $classname) . '.php';

    $file = dirname(__DIR__) . DIRECTORY_SEPARATOR . $filename;

    if (file_exists($file)) 
    {
        include_once $file;
    }
}

spl_autoload_register('autoloader');