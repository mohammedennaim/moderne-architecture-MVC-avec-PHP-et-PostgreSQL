<?php
require_once dirname(__DIR__) . './vendor/autolaod.php';
// require_once __DIR__ . '/../app/core/Router.php';

use App\Core\Router;

session_start();


$router = new Router();
require_once __DIR__ . '/../app/config/routes.php';


$router->dispatch($_SERVER['REQUEST_URI']);


