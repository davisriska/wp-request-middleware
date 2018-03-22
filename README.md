# Wordpress request middleware

### How to use
1. Add an action to wp_request_middleware that recieves MiddlewareHandlerInterface as a parameter.
2. Add new route with $middlewareHandler->addMiddleware(); As a param pass MiddlewareInterface type.
    * new Middleware()
```
add_action('wp_request_middleware', function (MiddlewareHandlerInterface $middlewareHandler) {
    $middlewareHandler->addMiddleware(new Middleware());
});
```
