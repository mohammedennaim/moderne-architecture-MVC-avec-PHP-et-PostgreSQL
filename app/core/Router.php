<?php
namespace App\Core;

class Router {
    private $routes = [];

    public function addRoute($path, $controller, $method = 'index'): void {
        $this->routes[$path] = ['controller' => $controller, 'method' => $method];
    }

    public function dispatch($url) {

        $path = parse_url($url, PHP_URL_PATH);
        $path = trim($path, '/');

        if (isset($this->routes[$path])) {
            
            $frontArray = [
                'HomeController',
                'ArticleController'
            ]; 
            
            if (in_array($this->routes[$path]['controller'], $frontArray) ) {
                
                $pathController = "App\\controllers\\front\\";
                
            }else{
                $pathController = "App\\controllers\\back\\";
            }
            
            $controllerName = $pathController . $this->routes[$path]['controller'];
            
            $method = $this->routes[$path]['method'];
            

            if (class_exists($controllerName) && method_exists($controllerName, $method)) {

                $controller = new $controllerName();
             
                $controller->$method();
                return;
            }
        }

        echo "404 - Page not found";
    }
}
