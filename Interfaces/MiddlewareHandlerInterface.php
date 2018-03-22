<?php
	
	namespace WPRequestMiddleware;
	
	
	interface MiddlewareHandlerInterface {
		
		/**
		 * Init the controller, fires the hook that allow consumer to add middleware
		 */
		function init();
		
		/**
		 * Register a middleware object in the controller
		 *
		 * @param  \WPRequestMiddleware\MiddlewareInterface $middleware
		 *
		 * @return \WPRequestMiddleware\MiddlewareInterface
		 */
		function addMiddleware(MiddlewareInterface $middleware);
		
		/**
		 * Run on 'do_parse_request' and iterate through attached middleware
		 *
		 * @param boolean $bool The boolean flag value passed by 'do_parse_request'
		 * @param \WP     $wp   The global wp object passed by 'do_parse_request'
		 */
		function handle($bool, \WP $wp);
		
		
	}