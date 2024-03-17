<?php


    class Scooter extends Orm{

        public function __construct() {
            parent::__construct('scooters');        
           
        }


        public static function createTable(){
            $db = new Database();
            
            $sql = "CREATE TABLE IF NOT EXISTS ins.scooters (
                id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                brain VARCHAR(256) NOT NULL,
                model VARCHAR(256) NOT NULL,
                img VARCHAR(256),
                price FLOAT NOT NULL
                ) ENGINE=InnoDB;";


            $db->queryDataBase($sql);

        }

    }

?>