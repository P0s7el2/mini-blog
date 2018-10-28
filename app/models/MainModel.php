<?php

namespace app\models;

use app\core\Model;

class MainModel extends Model {
    public function getNews(){
        $result = $this->db->row('SELECT title, text FROM news');
        return $result;
    }
}