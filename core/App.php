<?php
/**
 * App Class
 * Parses the URL and loads the appropriate controller and method.
 */
class App {
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
        $url = $this->parseUrl();

        // Check if Admin route
        $controllerPath = '../app/controllers/';
        if (isset($url[0]) && strtolower($url[0]) == 'admin') {
            $controllerPath .= 'Admin/';
            array_shift($url); // Remove 'admin' from url array
            $this->controller = 'Dashboard'; // Default admin controller
        } else {
            $controllerPath .= 'Frontend/';
            $this->controller = 'Home'; // Default frontend controller
        }

        // Determine Controller
        if (isset($url[0]) && file_exists($controllerPath . ucfirst($url[0]) . '.php')) {
            $this->controller = ucfirst($url[0]);
            unset($url[0]);
        }

        // Require and Instantiate Controller
        require_once $controllerPath . $this->controller . '.php';
        $this->controller = new $this->controller;

        // Determine Method
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // Parameters
        $this->params = $url ? array_values($url) : [];

        // Call the method
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseUrl() {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return [];
    }
}
