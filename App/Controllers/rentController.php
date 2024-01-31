<?php 

    include_once 'App/Models/Rent.php';
    include_once 'App/Models/Scooter.php';

    class rentController extends Controller{
            
            public function store(){
                $rentModel = new Rent();
                $scooterModel = new Scooter();
                $rent = [
                    'id_rent' => $_SESSION['id_rent']++,
                    'id_scooter' => $_GET['id_scooter'] ?? null,
                    'user' => $_SESSION['user'],
                    'start' => new DateTime('now', new DateTimeZone("Europe/Madrid")),
                    'end' => null,
                ];

                
                $rentModel->insert($rent);
                $_SESSION['flash']['ok'] = "Rent created";
                

                $scooter = $scooterModel->getById($_GET['id_scooter']);
                $scooter['user_rent'] = $_SESSION['user'];
                $scooterModel->update($scooter);
                

     
                
                header("Location: /scooter/index");
            }

    }

?>