<?php

namespace app\controllers;

use app\core\Controller;

Class MainController extends Controller{
	public function indexAction(){
	    $result = $this->model->getNews();

        $vars = [
            'news' => $result
        ];
//        $db = new Db;
//        $params = [
//          'name' => 'т'
//        ];
//        $data = $db->column('SELECT name FROM users WHERE name = :name', $params);
//        //debug($data);
		$this->view->render('mainpage', $vars);

	}

}

