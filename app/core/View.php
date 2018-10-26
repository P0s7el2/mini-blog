<?php

namespace app\core;


class View {

    //храним строку пути
	public $path;
	//храним массив пути ["controller"]=> "", ["action"]=> ""
	public $route;
	public $layout = 'default';

	public function __construct($route) {
	    // записываем массив пути в свойство класса
	    $this->route = $route;
	    //составляем из массива $route путь controller/action
	    $this->path = $route['controller'] . '/' . $route['action'];
	    //debug($this->route);
	}

	public function render($title, $vars = []) {
	    // включаем буферизацию вывода
	    ob_start();
	    //проверка на существование файла
        if(file_exists('app/views/'.$this->path.'.php')){
            //подключаем шаблон
            require 'app/views/'.$this->path.'.php';
            //получаем содержимое буфера и удалем
            $content = ob_get_clean();
            //подключаем лэйаут
            require 'app/views/layouts/'.$this->layout.'.php';
        } else {
            echo 'not found view';
        }
	}

}	