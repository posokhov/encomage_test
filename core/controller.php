<?php

namespace Core;

class Controller
{
    protected $view;

    public function __construct()
    {
        $this->view = new \Core\View();
    }

    public function loadModel($controllerName)
    {
        $path = 'model/' . $controllerName . '_model.php';
        if (file_exists($path)) {
            require_once $path;
            $nameModel = '\Model\\' . $controllerName . 'Model';
            $model = new $nameModel;
            return $model;
        }
    }
}


