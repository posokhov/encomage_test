<?php

namespace Controller;

class Main extends \Core\Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function main()
    {
        return $this->view->render('main/index');
    }
}