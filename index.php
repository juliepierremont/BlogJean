<?php

require_once 'vendor/autoload.php';
session_start();
use App\utils\Router;
$router = new Router();
$router->run();
