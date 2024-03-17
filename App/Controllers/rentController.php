<?php 

    include_once 'App/Models/Rent.php';
    include_once 'App/Models/Scooter.php';

    class rentController extends Controller{
            
            public function store(){
                $rentModel = new Rent();
                $scooterModel = new Scooter();

                $start= new DateTime('now', new DateTimeZone("Europe/Madrid"));

                $rent = [
                    'id_scooter' => $_GET['id_scooter'] ?? null,
                    'id_user' => $_SESSION['user']['id'],
                    'start' => $start->format('Y-m-d H:i:s'),
                    'end' => null,
                ];

                
                $rentModel->insert($rent);
                $_SESSION['flash']['ok'] = "Rent created";
                

                $scooter = $scooterModel->getById($_GET['id_scooter']);
                $scooterModel->insert($scooter);

                header("Location: /scooter/index");
            }

            public function finish(){
                
                $rentModel = new Rent();
                $scooterModel = new Scooter();
                $id = $_GET['id_scooter'] ?? null;
                
                if($id == null){
                    $_SESSION['flash']['error'] = "Rent not found";
                    header("Location: /scooter/index");
                    return;
                }

                $rent = $rentModel->getRentByIdScooter($id);

                if(!$rent){
                    $_SESSION['flash']['error'] = "Rent not found";
                    header("Location: /scooter/index");
                    return;
                }

                $end = new DateTime('now', new DateTimeZone("Europe/Madrid"));
                $start = new DateTime($rent['start'], new DateTimeZone("Europe/Madrid"));
                $rent['end'] = $end->format('Y-m-d H:i:s');


                $diff = $start->diff($end);
                $rent['price'] = ($diff->i * 60 + $diff->s) * $scooterModel->getById($id)['price'];


                $rentModel->insert($rent);

                $_SESSION['flash']['ok'] = "Rent finished";
                

                header("Location: /scooter/index");



            }


            public function index(){


                if($_SESSION['user']['username'] != 'admin'){
                    header("Location: /main/index");
                    return;
                }else{
                    $rentModel = new Rent();
                    $scooterModel = new Scooter();
                    $rents = $rentModel->getAllRentsWithUsername();
                    $params['rents'] = $rents;
                    $params['user'] = $_SESSION['user'];
                    $this->render("rent/index", $params, "site");
                }

            }

    }

?>