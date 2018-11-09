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
}