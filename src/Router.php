<?php

declare(strict_types=1);

namespace Vamoscolar\Vcphp;

class Router
{
    protected $routes = [
        // 'GET' => [
        //     '/' => [
        //         'controller' => 'App\Controllers\HomeController',
        //         'action' => 'index'
        //     ],
        // ],
        // 'POST' => []
    ];

    private function addRoute(string $router, string $controller, string $action, string $method): void
    {
        $this->routes[$method][$router] = ['controller' => $controller, 'action' => $action];
    }

    public function get(string $route, string $controller, string $action): void
    {
        $this->addRoute($route, $controller, $action, 'GET');
    }

    public function post(string $route, string $controller, string $action): void
    {
        $this->addRoute($route, $controller, $action, 'POST');
    }

    public function dispatch(): void
    {
        $uri = strtok($_SERVER['REQUEST_URI'], '?');
        $method = $_SERVER['REQUEST_METHOD'];

        if (array_key_exists($uri, $this->routes[$method])) {
            $controller = $this->routes[$method][$uri]['controller'];
            $action = $this->routes[$method][$uri]['action'];

            $controller = new $controller();
            $controller->$action();
        } else {
            throw new \Exception('Route not found');
        }
    }

}
