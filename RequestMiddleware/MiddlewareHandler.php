<?php
	
	namespace WPRequestMiddleware;
	
	class MiddlewareHandler implements MiddlewareHandlerInterface {
		
		private $middlewares;
		
		function __construct() {
			$this->middlewares = new \SplObjectStorage;
		}
		
		function init() {
			do_action('wp_virtual_routes', $this);
		}
		
		/**
		 * Register a route object in the controller
		 *
		 * @param  \WPRequestMiddleware\MiddlewareInterface $middleware
		 *
		 * @return \WPRequestMiddleware\MiddlewareInterface
		 */
		function addMiddleware(MiddlewareInterface $middleware) {
			$this->middlewares->attach($middleware);
			
			return $middleware;
		}
		
		function handle($bool, \WP $wp) {
			
			foreach ($this->middlewares as $middleware) {
				$middleware->handle();
			}
			
			return $bool;
		}
		
	}