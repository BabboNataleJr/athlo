<?php

function autoloader($classname)
{
    $filename = str_replace('\\', '/', $classname);

    $file = __DIR__ . $filename;

    include($file);
}

spl_autoload_register('autoloader');