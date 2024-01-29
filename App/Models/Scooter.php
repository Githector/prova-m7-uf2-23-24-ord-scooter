<?php


    class Scooter extends Orm{

        public function __construct() {
            if(!isset($_SESSION['id_scooter'])){
                $_SESSION['id_scooter'] = '1';
            }        
           
        }


    }

?>