<?php

namespace application\core;

use application\core\View;

class Router {

    protected $routes = [];
    protected $params = [];
    
    public function __construct() {

    }

    //добавление маршрута
    public function add($route, $params) {

    }

    //проверка маршрута
    public function match() {

    }

    //запуск 
    public function run(){
        echo 'strt';
    }
}