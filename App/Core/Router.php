<?php
namespace App\Core;

use App\Controllers\ProductController;
use App\Controllers\AuthController;
use App\Controllers\PlatformController;
use App\Controllers\DashboardController;

class Router
{
    private array $routes = [
        "GET" => [
            '/' => [PlatformController::class, 'platformView'],
            '/login' => [AuthController::class, 'loginView'],
            '/register' => [AuthController::class, 'registerView'],
            '/dashboard' => [DashboardController::class, 'dashboardView'], 
            '/addProduct' => [ProductController::class, 'addProductView'], 
        ],
        "POST" => [
            '/login' => [AuthController::class, 'login'],
            '/register' => [AuthController::class, 'register'],
            '/addProduct' => [ProductController::class, 'addProduct'],
        ]
    ];
    public function dispatch($method, $uri){
        if ($this->routes[$method][$uri]) {
            [$class, $action] = $this->routes[$method][$uri];
        
            $controller = new $class();
            $controller->$action();
        }
    }

}