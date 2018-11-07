<?php

namespace app\models;

use app\core\Model;

class MainModel extends Model {

    public $error;

    public function getNews(){
        $result = $this->db->row('SELECT title, text FROM news');
        return $result;
    }

    public function contactValidate($post){
        $nameLen = strlen($post['name']);
        $textLen = strlen($post['text']);
        if($nameLen < 3 or $nameLen > 20){
            $this->error .= 'имя должно содержать от 3 до 20 сим ';
        } elseif(!filter_var($post['email'], FILTER_VALIDATE_EMAIL)){
            $this->error .= 'ощибка email ';
        } elseif($textLen < 3 or $textLen > 40){
            $this->error .= 'текст от 3 до 40 символов';
        }

        if(isset($this->error))
            return false;


        return true;
    }
}