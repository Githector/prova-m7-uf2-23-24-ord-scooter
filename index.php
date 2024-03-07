<?php

require_once(__DIR__ . "/App/autoload.php");


$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();



// create new manager instance with desired driver


$router = new Router();
$router->run();
