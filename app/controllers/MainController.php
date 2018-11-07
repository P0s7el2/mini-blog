<?php

namespace app\controllers;

use app\core\Controller;

Class MainController extends Controller{
	public function indexAction(){
	    $result = $this->model->getNews();

        $vars = [
            'news' => $result
        ];

		$this->view->render('mainpage', $vars);

	}

    public function aboutAction() {
        $vars = ["info" => "created by P0s7el2", "year" => "2018"];
        $this->view->render('about2', $vars);
    }

    public function contactAction(){
	    if (!empty($_POST)){
	        if(!$this->model->contactValidate($_POST)){
                $this->view->message('error', $this->model->error);
            }
            mail('romeo.com.ru@mail.ru', 'message_'.$_POST['text'].'_FROM_'.$_POST['name'] );
	        $this->view->message('success', 'успех');
        }
        $this->view->render('Contacts');
    }

    public function postAction() {
	    $this->view->render('post');
    }
}

