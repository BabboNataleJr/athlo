<?php

class View 
{
    public function __contructor() 
    {
        // Constructor logic here
    }

    public function render($template, $variables = [])
    {
        // Render logic here
        extract($variables);
        ob_start();
        include __DIR__ . '/../views/' . $template . '.php';
        return ob_get_clean();
    }
}