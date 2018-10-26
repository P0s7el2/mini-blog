<?php

namespace app\controllers;

use app\core\Controller;

Class AboutController extends Controller{
	public function indexAction(){
		$this->view->render('about1');
	}


	public function aboutAction() {
        $vars = ["info" => "created by P0s7el2", "year" => "2018"];
        $this->view->render('about2', $vars);
	}
}

