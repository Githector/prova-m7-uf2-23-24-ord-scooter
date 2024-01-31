<?php


    class Rent extends Orm{

        public function __construct() {
            parent::__construct('rents');
            if(!isset($_SESSION['id_rent'])){
                $_SESSION['id_rent'] = '1';
            }        
           
        }


        public function checkRentByIdScooter($id){
            foreach($_SESSION['rents'] as $key => $rent){
                if($rent['id_scooter'] == $id && $rent['end'] == null){
                    $rent['user'];
                }
            }
            return null;
        }

        public function getRentByIdScooter($id){
            foreach($_SESSION['rents'] as $key => $rent){
                if($rent['id_scooter'] == $id && $rent['end'] == null){
                    return $rent;
                }
            }
            return null;
        }


    }

?>