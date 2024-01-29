<?php 

    include_once(__DIR__ . "/../Models/Scooter.php");

    class resetController extends Controller{
            
            public function run(){
                

                session_destroy();
                session_start();

                $scooterModel = new Scooter();
                $scooter = [
                    'id' => $_SESSION['id_scooter']++,
                    'brain'=> 'Dualtron',
                    'model' => 'Achilleus EY4',
                    'img' => 'p1.jpg',
                    'price' => 0.45

                ];
                
                $scooterModel->insert($scooter);

                $scooter = [
                    'id' => $_SESSION['id_scooter']++,
                    'brain'=> 'Dualtron',
                    'model' => 'City',
                    'img' => 'p2.jpeg',
                    'price' => 0.48

                ];

                $scooterModel->insert($scooter);

                $scooter = [
                    'id' => $_SESSION['id_scooter']++,
                    'brain'=> 'Dualtron',
                    'model' => 'Spider',
                    'img' => 'p3.jpeg',
                    'price' => 0.50

                ];

                $scooterModel->insert($scooter);

                $scooter = [
                    'id' => $_SESSION['id_scooter']++,
                    'brain'=> 'Xiaomi',
                    'model' => 'M365',
                    'img' => 'p4.jpeg',
                    'price' => 0.35

                ];

                $scooterModel->insert($scooter);

                $scooter = [
                    'id' => $_SESSION['id_scooter']++,
                    'brain'=> 'Xiaomi',
                    'model' => 'M365 Pro',
                    'img' => 'p5.jpeg',
                    'price' => 0.40

                ];

                $scooterModel->insert($scooter);

                $scooter = [
                    'id' => $_SESSION['id_scooter']++,
                    'brain'=> 'Bluetran',
                    'model' => 'Lightning 72V',
                    'img' => 'p6.jpg',
                    'price' => 0.53

                ];






                



                header("Location: /scooter/index");
            }

    }

?>