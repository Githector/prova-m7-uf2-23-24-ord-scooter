<?php

require_once(__DIR__ . "/App/autoload.php");


$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


$router = new Router();
$router->run();
