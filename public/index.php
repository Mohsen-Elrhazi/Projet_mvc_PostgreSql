<?php

require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

session_start();

use App\Core\Router;

$router = new Router();

// Définir les routes avec le chemin de base
$basePath = '/Projet_mvc_PostgreSql/public';
$router->add('GET', $basePath . '/', 'DashboardController', 'index');
$router->add('GET', $basePath . '/login', 'AuthController', 'showLoginForm');
$router->add('POST', $basePath . '/login', 'AuthController', 'login');
$router->add('GET', $basePath . '/register', 'AuthController', 'showRegisterForm');
$router->add('POST', $basePath . '/register', 'AuthController', 'register');
$router->add('GET', $basePath . '/dashboard/Admin', 'DashboardController', 'index');

$router->dispatch();