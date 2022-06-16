<?php

namespace Controller;

class Requests extends \Core\Controller
{
    private $post;

    private $modelName = "Rating";

    public function __construct()
    {
        $this->post = $_POST;
    }

    public function save()
    {
        $this->model->savePost($this->post);
    }

    public function saveRating()
    {
        $model = $this->loadModel($this->modelName);
        $model->saveRate($this->post);
    }


}