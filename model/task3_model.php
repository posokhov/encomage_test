<?php

namespace Model;

class Task3Model extends \Core\Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function getList()
    {
        $sql = "SELECT * FROM `post` ORDER BY `postId` DESC;";
        $query = $this->db->query($sql);
        $answer = $query->fetchAll();
        return $answer;
    }

    public function savePost($post)
    {
        $sql = "INSERT INTO `post` (`user`, `text`) VALUES ('{$post['user']}', '{$post['text']}')";
        $query = $this->db->query($sql);
        return true;
    }

    public function getCountPosts()
    {
        $sql = "SELECT * FROM `post`;";
        $query = $this->db->query($sql);
        return $query->rowCount();
    }

    public function getNegativeRate()
    {
        $sql = "SELECT * FROM `rating` WHERE `rate`<3;";
        $query = $this->db->query($sql);
        return $query->rowCount();
    }

    public function getPositiveRate()
    {
        $sql = "SELECT * FROM `rating` WHERE `rate` > 3;";
        $query = $this->db->query($sql);
        return $query->rowCount();
    }

    public function saveComments($post)
    {
        $sql = "INSERT INTO `comments` (`postId`, `user`, `text`) VALUES ('{$post['postId']}', '{$post['user']}', '{$post['text']}');";
        $query = $this->db->query($sql);
        return true;
    }

    public function getAllComments()
    {
        $sql = "SELECT * FROM `comments` ORDER BY `id` DESC;";
        $query = $this->db->query($sql);
        return $query->fetchAll();
    }
}
