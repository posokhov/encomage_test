<?php

namespace Model;

class RatingModel extends \Core\Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function getRate()
    {
        $sql = "SELECT * FROM `rating`;";
        $query = $this->db->query($sql);
        $answer = $query->fetchAll();
        return $answer;
    }

    public function saveRate($post)
    {
        $id = $post['star'];
        $sql = "INSERT INTO `rating` (`postId`, `rate`) VALUES ('" . $post['id'] . "', '" . $post['star'] . "')";
        $query = $this->db->query($sql);
        return true;
    }
}
