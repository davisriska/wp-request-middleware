<?php
	
	namespace WPRequestMiddleware;
	
	/*
		Plugin Name: WP Request middleware
		Description: WP Request middleware
		Author: davisriska
		License: MIT
	*/
	
	require_once 'Interfaces/MiddlewareInterface.php';
	require_once 'Interfaces/MiddlewareHandlerInterface.php';
	require_once 'RequestMiddleware/MiddlewareHandler.php';
	
	$middlewareHandler = new MiddlewareHandler();
	
	add_action('init', array($middlewareHandler,
	                         'init'
	));
	
	add_filter('do_parse_request', [$middlewareHandler,
	                                'handle'
	], PHP_INT_MAX - 1, 2);
