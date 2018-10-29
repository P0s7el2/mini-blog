<?php

namespace app\core;

use app\core\View;

abstract class Controller {

    public $route;
    public $view;
    public $model;
    public $acl;

    public function __construct($route) {
		$this->route = $route;
		if(!$this->checkAcl()){
		    View::errorCode(403);
        };
		$this->view = new View($route);
		$this->model = $this->loadModel($route['controller']);
	}

	public function loadModel($name){
	    $path = 'app\models\\'.ucfirst($name).'Model';
	    if(class_exists($path)){
	        return new $path;
        }
    }

    public function checkAcl(){
//        $this->acl = require 'app/acl/'.$this->route['controller'].'.php';
//        if($this->isAcl('all')){
//            return true;
//        } elseif (isset($_SESSION[admin][id]) and $this->isAcl('admin')){
//            return true;
//        }
        return true;
    }

    public function isAcl($key)
    {
        return in_array($this->route['controller'], $this->acl[$key]);
    }

}