<?php

namespace app\controllers;

use app\core\Controller;

Class AdminController extends Controller{

    public function __construct($route)
    {
        parent::__construct($route);
        $this->view->layout = 'admin';
        //$_SESSION['admin'] = 1;
    }

    public function loginAction(){
        if(isset($_SESSION['admin'])) {
            $this->view->redirect('/admin/add');
        }
        if(!empty($_POST)){
            if(!$this->model->loginValidate($_POST)) {
                $this->view->message('error', $this->model->error);
            }
            $_SESSION['admin'] = true;
            $this->view->location('add');
        }
        $this->view->render('Вход');
    }

    public function addPostAction() {
        if(!empty($_POST)){
            if(!$this->model->postValidate($_POST, 'add')) {

                $this->view->message('error', $this->model->error);
            }
            $this->view->message('ok', 'ok');
        }
        $this->view->render('Добавить пост');
    }

    public function updatePostAction() {
        if(!empty($_POST)){
            if(!$this->model->postValidate($_POST, 'update')) {
                $this->view->message('error', $this->model->error);
            }
            $this->view->message('ok', 'ok');
        }
        $this->view->render('Редактировать пост');
    }

    public function deleteAction() {
        exit('удаление');
    }

    public function logoutAction() {
        unset($_SESSION['admin']);
        $this->view->redirect('/admin/login');
    }

    public function postsAction() {
        $this->view->render('Новости');
    }
}

