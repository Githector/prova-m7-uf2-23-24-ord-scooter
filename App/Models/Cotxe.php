<?php


    class Cotxe extends Orm{

        public function __construct() {
            parent::__construct('cotxes');
            if(!isset($_SESSION['id_cotxe'])){
                $_SESSION['id_cotxe'] = '1';
            }        
           
        }


    }

?>