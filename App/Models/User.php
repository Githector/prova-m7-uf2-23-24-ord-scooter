<?php


    class User extends Orm{

        public function __construct() {
            parent::__construct('users'); 
        }


        public static function createTable(){
            $sql = 'CREATE TABLE IF NOT EXISTS users (
                id INT NOT NULL AUTO_INCREMENT,
                username VARCHAR(250) NOT NULL,
                password VARCHAR(250) NOT NULL,
                salt VARCHAR(250) NOT NULL,
                created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                modified_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                PRIMARY KEY (id)
            ) ENGINE = InnoDB;';

            $db = new Database();
            $db->queryDataBase($sql);
        }

        public function checkLogin($username, $pass){
            $sql = "SELECT * FROM users WHERE username=:username";
            $params = array(
                ":username" => $username
            );

            $db = new Database();
            $result = $db->queryDataBase($sql, $params)->fetch();

            if($result){
                $saltDB = $result['salt'];
                $passDB = $result['password'];
                $pepper = $_ENV['PEPPER'];

                $passwordToCheck = $pepper . $pass . $saltDB;

                if(password_verify($passwordToCheck, $passDB)){
                    return $result;
                }else{
                    return null;
                }



                
            }else{
                return null;
            }
        }


    }

?>