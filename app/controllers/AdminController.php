<?php

namespace app\controllers;

use app\core\Controller;

Class AdminController extends Controller{

    public function __construct($route)
    {
        parent::__construct($route);
        //$_SESSION['admin'] = 1;
    }

    public function loginAction(){
        if(!empty($_POST)){
            //$this->view->location('/about');
        }
        $this->view->render('Вход');
    }

    public function addPostAction() {
        $this->view->render('Добавить пост');
    }

    public function editPostAction() {
        $this->view->render('Редактировать пост');
    }

    public function deleteAction() {
        exit('удаление');
    }

    public function logoutAction() {
        exit('выход');
    }
}

