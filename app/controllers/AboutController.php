<?php

namespace app\controllers;

use app\core\Controller;

Class AboutController extends Controller{
	public function indexAction(){
		echo 'aboutpage';
	}


	public function aboutAction() {
		echo 'about <br>';
	}
}

