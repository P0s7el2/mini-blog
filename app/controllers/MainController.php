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

}

