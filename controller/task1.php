<?php

namespace Controller;

class Task1 extends \Core\Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function task1()
    {
        $this->view->render('main/task1');
    }
}