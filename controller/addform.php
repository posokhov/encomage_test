<?php

namespace Controller;

class AddForm extends \Core\Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function main()
    {
        $this->view->render('main/form');
    }
}