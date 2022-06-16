<?php

namespace Controller;

class Task2 extends \Core\Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function task2()
    {
        $this->view->render('main/task2');
    }
}