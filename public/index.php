<?php

// Inclure l'autoload de Composer
require_once '../vendor/autoload.php';  // Assure-toi que ce chemin est correct

use App\Core\Router;

// Créer l'objet Router
$router = new Router();

// Récupérer la méthode HTTP et l'URL
$method = $_SERVER['REQUEST_METHOD']; 
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Debug pour vérifier la méthode et l'URL
// var_dump($method, $uri);

// Dispatcher la requête vers la bonne route
$router->dispatch($method, $uri);




// echo "page index.php";
//  var_dump($_SERVER);
// $uri = $_SERVER['REQUEST_URI'];
// var_dump($uri);
// $method = $_SERVER['REQUEST_METHOD'];

// var_dump($method);
// var_dump($_REQUEST);