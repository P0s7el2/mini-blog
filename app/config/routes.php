<?php

return [
	//MainController
	'' => [
		'controller' => 'main',
		'action' => 'index',
	],
	'about' => [
		'controller' => 'about',
		'action' => 'about'
	],
	'contact' => [
		'controller' => 'main',
		'action' => 'contact'
	],
	'post' => [
		'controller' => 'main',
		'action' => 'post'
	],

	//AdminController
	'login' => [
		'controller' => 'admin',
		'action' => 'login'
	],
	'logout' => [
		'controller' => 'admin',
		'action' => 'logout'
	],
	'add' => [
		'controller' => 'admin',
		'action' => 'add'
	],
	'delete' => [
		'controller' => 'admin',
		'action' => 'delete'
	],
	'update' => [
		'controller' => 'admin',
		'action' => 'update'
	]
];
