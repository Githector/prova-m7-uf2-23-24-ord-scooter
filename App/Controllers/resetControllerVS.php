<?php 

    include_once(__DIR__ . "/../Models/Scooter.php");
    include_once(__DIR__ . "/../Models/Rent.php");
    include_once(__DIR__ . "/../Models/User.php");

    class resetController extends Controller{
            
            public function run(){
                
                $scooterModel = new Scooter();
                $scooter = [
                    'brain'=> 'Dualtron',
                    'model' => 'Achilleus EY4',
                    'img' => 'p1.jpg',
                    'price' => 0.45,

                ];
                
                $scooterModel->insert($scooter);

                $scooter = [
                    'id' => $_SESSION['id_scooter']++,
                    'brain'=> 'Dualtron',
                    'model' => 'City',
                    'img' => 'p2.jpeg',
                    'price' => 0.48,

                ];

                $scooterModel->insert($scooter);

                $scooter = [
                    'id' => $_SESSION['id_scooter']++,
                    'brain'=> 'Dualtron',
                    'model' => 'Spider',
                    'img' => 'p3.jpeg',
                    'price' => 0.50,

                ];

                $scooterModel->insert($scooter);

                $scooter = [
                    'id' => $_SESSION['id_scooter']++,
                    'brain'=> 'Xiaomi',
                    'model' => 'M365',
                    'img' => 'p4.jpeg',
                    'price' => 0.35,

                ];

                $scooterModel->insert($scooter);

                $scooter = [
                    'id' => $_SESSION['id_scooter']++,
                    'brain'=> 'Xiaomi',
                    'model' => 'M365 Pro',
                    'img' => 'p5.jpeg',
                    'price' => 0.40,

                ];

                $scooterModel->insert($scooter);

                $scooter = [
                    'id' => $_SESSION['id_scooter']++,
                    'brain'=> 'Bluetran',
                    'model' => 'Lightning 72V',
                    'img' => 'p6.jpg',
                    'price' => 0.53,

                ];

                $scooterModel->insert($scooter);


  
                // $rentModel = new Rent();
                // $resposta = $rentModel->getRentByIdScooter(45);
                // echo "<pre>";
                // var_dump($resposta->fetch());
                // echo "</pre>";


                $userModel = new User();
                $salt = bin2hex(random_bytes(16));
                $pass = 'admin1234';
                $passwordWithSaltAndPepper = $_ENV['PEPPER'] . $pass . $salt;
                $hashedPassword = password_hash($passwordWithSaltAndPepper,PASSWORD_BCRYPT);

                $user = [
                    'username' => 'admin',
                    'password' => $hashedPassword,
                    'salt' => $salt,
                    
                ];

                $userModel->insert($user);


                $userModel = new User();
                $salt = bin2hex(random_bytes(16));
                $pass = '1234';
                $passwordWithSaltAndPepper = $_ENV['PEPPER'] . $pass . $salt;
                $hashedPassword = password_hash($passwordWithSaltAndPepper,PASSWORD_BCRYPT);

                $user = [
                    'username' => 'pepe',
                    'password' => $hashedPassword,
                    'salt' => $salt,
                    
                ];

                $userModel->insert($user);

                $userModel = new User();
                $salt = bin2hex(random_bytes(16));
                $pass = '1234';
                $passwordWithSaltAndPepper = $_ENV['PEPPER'] . $pass . $salt;
                $hashedPassword = password_hash($passwordWithSaltAndPepper,PASSWORD_BCRYPT);

                $user = [
                    'username' => 'hector',
                    'password' => $hashedPassword,
                    'salt' => $salt,
                    
                ];

                $userModel->insert($user);


                $rentModel = new Rent();

                $startDT = new DateTime('now', new DateTimeZone("Europe/Madrid"));

                $rent = [
                    'id_scooter' => 1,
                    'id_user' => 2,
                    'start' => $startDT->format('Y-m-d H:i:s'),
                ];
                
                $rentModel->insert($rent);

                header("Location: /main/index");
            }

    }

?>