<?php

namespace app\controllers;

use app\core\Controller;

Class MainController extends Controller{
	public function indexAction(){
	    //$this->view->redirect('/about');
		$this->view->render('mainpage');

	}

}

