<?php
    
    if(!isset($_SESSION)) {
        session_start();
    }


    require_once(__DIR__ . "/../vendor/autoload.php");
    require_once(__DIR__ . "/config.php");
    require_once(__DIR__ . "/Router.php");
    require_once(__DIR__ . "/Core/Controller.php");

    
?>