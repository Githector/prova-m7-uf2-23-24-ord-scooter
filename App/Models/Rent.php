<?php


    class Rent extends Orm{

        public function __construct() {
            if(!isset($_SESSION['id_rent'])){
                $_SESSION['id_rent'] = '1';
            }        
           
        }


    }

?>