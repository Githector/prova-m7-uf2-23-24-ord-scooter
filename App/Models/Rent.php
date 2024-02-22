<?php


    class Rent extends Orm{

        public function __construct() {
            parent::__construct('rents');      
           
        }


        // public function checkRentByIdScooter($id){
        //     foreach($_SESSION['rents'] as $key => $rent){
        //         if($rent['id_scooter'] == $id && $rent['end'] == null){
        //             $rent['user'];
        //         }
        //     }
        //     return null;
        // }

        // public function checkRentByIdScooter($id){
        //     $sql = "SELECT * FROM $this->model WHERE id_scooter=:id AND end IS NULL";
        //     $params = array(
        //         ":id" => $id
        //     );
        //     $db = new Database();
        //     $result = $db->queryDataBase($sql, $params);
        //     return $result;
        // }

        public function getRentByIdScooter($id){

            $sql = "SELECT * FROM $this->model WHERE id_scooter=:id";


            $params = array(
                ":id" => $id
            );

            $db = new Database();
            $result = $db->queryDataBase($sql, $params);

            return $result;
        }

        public static function createTable(){
            $db = new Database();
            
            $sql = "CREATE TABLE IF NOT EXISTS ins.rents (
                id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                user VARCHAR(256) NOT NULL,
                start DATETIME NOT NULL,
                end DATETIME,
                id_scooter INT NOT NULL,
                FOREIGN KEY (id_scooter) REFERENCES ins.scooters(id) ON DELETE CASCADE
                ) ENGINE=InnoDB;";


            $db->queryDataBase($sql);

        }


    }

?>