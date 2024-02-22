<?php

include_once(__DIR__ . "/../Services/Database.php");
class Orm {

    protected $model;

    public function __construct($model) {
        if(!isset($_SESSION[$model])) {
            $_SESSION[$model] = [];
        }
        $this->model = $model;
        
    
        
    }

    public function getAll() {
        //return $_SESSION[$this->model];
        $sql = "SELECT * FROM $this->model";

        $db = new Database();
        $result = $db->queryDataBase($sql)->fetchAll();

        return $result;

    }

    public function getById($id) {
        $sql = "SELECT * FROM $this->model WHERE id=:id";
       
        $params = array(
            ":id" => $id
        );

        $db = new Database();
        $result = $db->queryDataBase($sql, $params)->fetch();

        return $result;
    }


    public function insert($data) {
        //$_SESSION[$this->model][] = $data;

        $params = array();
            foreach($data as $key => $value ){
                $params[":$key"] = $value;
            }

        if(!isset($data['id'])){
            //AFEGIM L'ELEMENT A LA BBDD
            $columns = implode(", ",array_keys($data));
            $values = ":" . implode(", :",array_keys($data));
            $sql = "INSERT INTO $this->model ($columns) VALUES ($values)";  
            $db = new Database();
            $data = $db->queryDataBase($sql, $params, true);
            return $data;
        }else{
            //modifica L'ELEMENT A LA BBDD
            $values_sql_update ="";
            foreach($data as $key => $value){
                if($key!='id'){
                $values_sql_update .= "$key = :$key, ";
                }

            }
            $values_sql_update = substr($values_sql_update,0,-2);

            $sql = "UPDATE $this->model SET $values_sql_update WHERE id=:id";


            $db = new Database();
            $result = $db->queryDataBase($sql,$params);
            return $result;
        }


    }


    public function deleteById($id) {
        $sql = "DELETE FROM scooters WHERE id=:id";
        $params = array(
            ":id" => $id
        );

        $db = new Database();
        $db->queryDataBase($sql, $params);
    }
}
?>