<?php

namespace Controller;

class Task3 extends \Core\Controller
{
    private $post;

    private $controllerName = 'Task3';

    protected $model;

    public function __construct()
    {
        $this->post = $_POST;
        $this->model = $this->loadModel($this->controllerName);
        parent::__construct();
    }

    public function task3()
    {
        $this->view->render('main/task3');
    }

    public function getPosts()
    {
        $answer = $this->model->getList();
        return $answer;
    }

    public function savepost()
    {
        $this->model->savePost($this->post);
    }

    public function saveRating()
    {
        $this->model->saveRate($this->post);
    }

    public function getCountAllPosts()
    {
        $count = $this->model->getCountPosts();
        return $count;
    }

    public function getNegativeRating()
    {
        $negativeCountRate = $this->model->getNegativeRate();
        return $negativeCountRate;
    }

    public function getPositiveRating()
    {
        $positiveCountRate = $this->model->getPositiveRate();
        return $positiveCountRate;
    }

    public function savecomment()
    {
        $this->model->saveComments($this->post);
    }

    public function getComment()
    {
        return $this->model->getAllComments();
    }
}