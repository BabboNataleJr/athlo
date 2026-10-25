<?php

function autoloader($classname)
{
    $filename = str_replace('\\', '/', $classname) . '.php';

    $file = $filename;

    echo "<pre>" . print_r($filename, true) . "</pre>";
    echo "<pre>" . print_r($file, true) . "</pre>";

    include_once $file;
}

spl_autoload_register('autoloader');