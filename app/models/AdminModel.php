<?php

namespace app\models;

use app\core\Model;

class AdminModel extends Model {

    public $error;

    public function loginValidate($post){
        $config = require 'app/config/admin.php';
        if ($config['login'] != $post['login'] or $config['password'] != $post['password']) {
            $this->error = 'ошибка логин\пароль';
            return false;
        }
        return true;
    }

    public function postValidate($post, $type){
        $nameLen = strlen($post['name']);
        $descrLen = strlen($post['description']);
        $textLen = strlen($post['text']);
        if($nameLen < 3 or $nameLen > 20){
            $this->error .= 'имя должно содержать от 3 до 20 сим ';
        }
        if($descrLen < 3 or $descrLen > 100){
            $this->error .= 'ошибка длинны описания ';
        }
        if($textLen < 3 or $textLen > 400){
            $this->error .= 'ошибка длинны текста ';
        }

        if(empty($_FILES['img']['tmp_name']) and $type == 'add'){
            $this->error .= 'ошибка изображения ';
        }

        if(isset($this->error))
            return false;


        return true;
    }
}