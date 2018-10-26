<?php

namespace app\controllers;

use app\core\Controller;

Class AboutController extends Controller{
	public function indexAction(){
		$this->view->render('about1');
	}


	public function aboutAction() {
        $this->view->render('about2');
	}
}

