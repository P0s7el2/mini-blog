<?php

namespace app\controllers;

use app\core\Controller;

Class AdminController extends Controller{
    public function loginAction(){
        if(!empty($_POST)){
            $this->view->location('/about');
        }
        $this->view->render('about1');
    }


    public function registerAction() {
        if(!empty($_POST)){
            $this->view->location('/register');
        }
    }
}

