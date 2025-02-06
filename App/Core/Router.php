<?php
namespace App\Core;

use App\Controllers\ProductController;
use App\Controllers\AuthController;
use App\Controllers\PlatformController;
use App\Controllers\DashboardController;

class Router
{
    // Définir les routes et les contrôleurs associés
    private array $routes = [
        "GET" => [
            '/' => [PlatformController::class, 'platformView'],
            '/login' => [AuthController::class, 'loginView'],
            '/register' => [AuthController::class, 'registerView'],
            '/dashboard' => [DashboardController::class, 'dashboardView'], 
        ],
        "POST" => [
            '/create' => [ProductController::class, 'store'],
            '/login' => [AuthController::class, 'login'],
            '/register' => [AuthController::class, 'register'],
        ]
    ];
    public function dispatch($method, $uri){
        if ($this->routes[$method][$uri]) {
            [$class, $action] = $this->routes[$method][$uri];
            // echo $class;
            // echo $method;
            $controller = new $class();
            $controller->$action();
        }
    }


    // Dispatching des requêtes
    // public function dispatch($method, $uri)
    // {
    //     // Nettoyer l'URI pour éviter les slash à la fin
    //     $uri = rtrim($uri, '/');

    //     // Vérifier si la route existe
    //     if (isset($this->routes[$method][$uri])) {
    //         [$controllerClass, $action] = $this->routes[$method][$uri];

    //         // Vérifier si la classe et la méthode existent
    //         if (class_exists($controllerClass) && method_exists($controllerClass, $action)) {
    //             $controller = new $controllerClass();
    //             $controller->$action();  // Appeler la méthode du contrôleur
    //             return;
    //         }
    //     }

    //     // Si la route n'existe pas, afficher une erreur 404
    //     http_response_code(404);
    //     echo "404 Not Found";
    // }
}