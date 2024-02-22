<?php 

    include_once(__DIR__ . "/../Models/Scooter.php");
    include_once(__DIR__ . "/../Models/Rent.php");
    include_once(__DIR__ . "/../Models/User.php");

    class resetController extends Controller{
            
            public function run(){
                
                //CREATE TABLE `ins`.`scooters` (`id` INT NOT NULL AUTO_INCREMENT , `brain` VARCHAR(250) NOT NULL , `model` VARCHAR(250) NOT NULL , `img` VARCHAR(200) NOT NULL , `price` FLOAT NOT NULL , `user_rent` VARCHAR(200) NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
                $db = new Database();
                $sql = 'DROP TABLE IF EXISTS scooters,rents,users';
                
                $db->queryDataBase($sql);
              
                Scooter::createTable();
                Rent::createTable();
                User::createTable();

                $scooterModel = new Scooter();
                $scooter = [
                    'brain'=> 'Dualtron',
                    'model' => 'Achilleus EY4',
                    'img' => 'p1.jpg',
                    'price' => 0.45,
                    'user_rent' => null,

                ];
                
                $scooterModel->insert($scooter);

                $scooter = [
                    //'id' => $_SESSION['id_scooter']++,
                    'brain'=> 'Dualtron',
                    'model' => 'City',
                    'img' => 'p2.jpeg',
                    'price' => 0.48,
                    'user_rent' => null,

                ];

                $scooterModel->insert($scooter);

                $scooter = [
                    //'id' => $_SESSION['id_scooter']++,
                    'brain'=> 'Dualtron',
                    'model' => 'Spider',
                    'img' => 'p3.jpeg',
                    'price' => 0.50,
                    'user_rent' => null,

                ];

                $scooterModel->insert($scooter);

                $scooter = [
                    //'id' => $_SESSION['id_scooter']++,
                    'brain'=> 'Xiaomi',
                    'model' => 'M365',
                    'img' => 'p4.jpeg',
                    'price' => 0.35,
                    'user_rent' => null,

                ];

                $scooterModel->insert($scooter);

                $scooter = [
                    //'id' => $_SESSION['id_scooter']++,
                    'brain'=> 'Xiaomi',
                    'model' => 'M365 Pro',
                    'img' => 'p5.jpeg',
                    'price' => 0.40,
                    'user_rent' => null,

                ];

                $scooterModel->insert($scooter);

                $scooter = [
                    //'id' => $_SESSION['id_scooter']++,
                    'brain'=> 'Bluetran',
                    'model' => 'Lightning 72V',
                    'img' => 'p6.jpg',
                    'price' => 0.53,
                    'user_rent' => null,

                ];

                $scooterModel->insert($scooter);

                $rentModel = new Rent();

                $startDT = new DateTime('now', new DateTimeZone("Europe/Madrid"));

                $rent = [
                    'id_scooter' => 1,
                    'user' => "Hector",
                    'start' => $startDT->format('Y-m-d H:i:s'),
                    'end' => null,
                ];
                
                $rentModel->insert($rent);

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

                header("Location: /main/index");
            }

    }

?>