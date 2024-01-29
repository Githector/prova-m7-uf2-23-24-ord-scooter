<?php 
include_once(__DIR__ . "/../Models/Orm.php");

class Controller{

    

    protected function render($path, $params = [], $layout = ""){

        ob_start(); //iniciem el buffer
        require_once(__DIR__ . "/../Views/" . $path . ".view.php");
        $content = ob_get_clean(); //guardem el contingut del buffer i el buidem
        //Ara necessitem recuperar el layout
        require_once(__DIR__ . "/../Views/layouts/" . $layout . ".layout.php");

    }
}



?>
