<?php
    class Router{

        private $controller;
        private $method;

        public function __construct(){
            $this->matchRoute();
        }

        public function matchRoute(){
            //echo URL;
            $url = explode('/', URL);
            //echo "<pre>";
            //var_dump($url);
            //echo "</pre>";
            //die();
            $this->controller = !empty($url[0]) ? $url[0] : 'reset';
            $this->method = !empty($url[1]) ? $url[1] : 'run';

            $this->controller = $this->controller . 'Controller';
            require_once(__DIR__ . "/Controllers/" . $this->controller . ".php");
        }

        public function run(){

            $controller = new $this->controller();
            $method = $this->method;
            $controller->$method();
        }
    }
?>