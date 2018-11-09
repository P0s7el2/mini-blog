<?php

return [
	//MainController
	'' => [
		'controller' => 'main',
		'action' => 'index',
	],
	'about' => [
		'controller' => 'main',
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
	'admin/login' => [
		'controller' => 'admin',
		'action' => 'login'
	],
	'admin/logout' => [
		'controller' => 'admin',
		'action' => 'logout'
	],
	'admin/add' => [
		'controller' => 'admin',
		'action' => 'addPost'
	],
	'admin/delete' => [
		'controller' => 'admin',
		'action' => 'deletePost'
	],
	'admin/update' => [
		'controller' => 'admin',
		'action' => 'updatePost'
	],
    'admin/posts' => [
        'controller' => 'admin',
        'action' => 'posts'
    ],
];
