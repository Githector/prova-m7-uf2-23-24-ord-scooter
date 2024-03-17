<?php 

 class Store{

    public static function store($src, $dst, $filename){

        $url_insert = $_SERVER['DOCUMENT_ROOT'] . "/Public/Assets/" . $dst; 
        $url_target = $url_insert . "/" . $filename;

        if (!file_exists($url_insert)) {
            mkdir($url_insert, 0777, true); //el true permet afegir directoris o carpetes de forma recursiva
        }

        if (move_uploaded_file($src, $url_target)) {
            return true;
        } else {
            return false;
        }
    
}
 }
?>