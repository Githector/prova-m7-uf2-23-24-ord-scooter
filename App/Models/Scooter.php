<?php


    class Scooter extends Orm{

        public function __construct() {
            parent::__construct('scooters');
            if(!isset($_SESSION['id_scooter'])){
                $_SESSION['id_scooter'] = '1';
            }        
           
        }

    }

?>