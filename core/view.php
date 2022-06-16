<?php

namespace Core;

class View
{
    public function render($name)
    {
        require 'view/header.php';
        require 'view/' . $name . '.php';
        require_once "view/footer.php";
    }
}