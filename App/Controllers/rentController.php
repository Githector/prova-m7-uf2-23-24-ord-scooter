<?php 

    include_once 'App/Models/Rent.php';
    class rentController extends Controller{
            
            public function store(){
                
                $rent = [
                    'id_rent' => $_SESSION['id_rent']++,
                    'id_scooter' => $_SESSION['id_scooter'],
                    'user' => $_SESSION['user'],
                    'start' => new DateTime('now', new DateTimeZone("Europe/Madrid")),
                    'end' => null,
                ];
                
                $this->render("main/index", [], "site");
            }

    }

?>