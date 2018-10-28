<?php

namespace app\controllers;

use app\core\Controller;
use app\lib\Db;

Class MainController extends Controller{
	public function indexAction(){
        $db = new Db;
        $params = [
          'name' => 'кек'
        ];
        $data = $db->column('SELECT name FROM users WHERE name = :name', $params);
        debug($data);
		$this->view->render('mainpage');

	}

}

