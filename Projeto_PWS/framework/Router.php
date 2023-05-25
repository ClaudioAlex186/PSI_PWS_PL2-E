<?php


class Router
{
    /**
     * Route the request to the appropriate controllers and action.
     */
    public function route() {
        // Load the routes from the routes.php file
        $routes = require('routes.php');
        // Get the controllers and action from the query string
        $controllerPrefix = $_GET['c'] ?? null;
        $action = $_GET['a'] ?? null;
        // If the controllers and action are not specified, use the default route
        if ($controllerPrefix && $action) {
            $route = $controllerPrefix . '/' . $action;
        } else {
            $route = 'defaultRoute';
        }
        // If the route is not found, display an error message
        if (!(isset($routes[$controllerPrefix][$action])) && !(isset($routes[$route]))) {
            die('ROUTER: Rota inválida! \'' . $route . '\'!');
        }
        if($route === 'defaultRoute'){
            list($acceptedMethods, $controllerName, $action) = $routes[$route];
        } else {
            // Get the accepted HTTP methods, controllers name, and action for the route
            list($acceptedMethods, $controllerName, $action) = $routes[$controllerPrefix][$action];
        }
        $acceptedMethods = explode('|', $acceptedMethods);
        // If the HTTP method is not accepted for this route, display an error message
        if (!in_array($_SERVER['REQUEST_METHOD'], $acceptedMethods)) {
            die('ROUTER: Método HTTP não aceite para a rota \'' . $route . '\'!');
        }
        // Get any remaining query parameters to pass to the controllers action
        $params = $_GET;
        unset($params['c'], $params['a']);
        // Create an instance of the controllers and call the specified action
        $controller = new $controllerName();
        call_user_func_array([$controller, $action], $params);
    }
}