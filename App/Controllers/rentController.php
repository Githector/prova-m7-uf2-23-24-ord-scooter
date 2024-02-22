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
                    'user' => $_SESSION['user'],
                    'start' => $start->format('Y-m-d H:i:s'),
                    'end' => null,
                ];

                
                $rentModel->insert($rent);
                $_SESSION['flash']['ok'] = "Rent created";
                

                $scooter = $scooterModel->getById($_GET['id_scooter']);
                $scooter['user_rent'] = $_SESSION['user'];
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

                echo "<pre>";
                var_dump($rent);
                echo "</pre>";

                if(!$rent){
                    $_SESSION['flash']['error'] = "Rent not found";
                    header("Location: /scooter/index");
                    return;
                }

                $rent['end'] = new DateTime('now', new DateTimeZone("Europe/Madrid"));
                $diff = $rent['end']->diff($rent['start']);

                $rent['price'] = ($diff->i * 60 + $diff->s) * $scooterModel->getById($id)['price'];
                $rentModel->update($rent);
                $_SESSION['flash']['ok'] = "Rent finished";
                $scooter = $scooterModel->getById($rent['id_scooter']);
                $scooter['user_rent'] = null;
                $scooterModel->update($scooter);


                header("Location: /scooter/index");



            }


            public function index(){


                if($_SESSION['user']!='admin'){
                    header("Location: /main/index");
                    return;
                }else{
                    $rentModel = new Rent();
                    $scooterModel = new Scooter();
                    $rents = $rentModel->getAll();
                    $scooters = $scooterModel->getAll();
                    $user = $_SESSION['user'];
                    foreach ($rents as $key => $rent) {
                        $rents[$key]['scooter'] = $scooterModel->getById($rent['id_scooter']);
                        
                    }
    
                    $params['rents'] = $rents;
    
                    $this->render("rent/index", $params, "site");
                }

            }

    }

?>