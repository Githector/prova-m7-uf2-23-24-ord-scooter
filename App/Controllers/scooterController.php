<?php
include_once(__DIR__ . "/../Models/Scooter.php");
include_once(__DIR__ . "/../Core/Store.php");

class scooterController extends Controller
{

    public function index()
    {
        $params['user'] = $_SESSION['user'] ?? null;
        
        if($params['user'] == null){
            header("Location: /main/index");
            die();
        }else{
            $scooterModel = new Scooter();
            $params['scooters'] = $scooterModel->getAll();


            if (isset($_SESSION['flash'])) {
                $params['flash'] = $_SESSION['flash'];
                unset($_SESSION['flash']);
            }
    
            if (isset($_SESSION['post'])) {
                $params['post'] = $_SESSION['post'];
                unset($_SESSION['post']);
            }



            $this->render("scooter/index", $params, "site");
        }
        }


    public function destroy()
    {
        $id = $_GET['id'] ?? null;

        if (!is_null($id)) {
            $scooterModel = new Scooter();
            $scooter = $scooterModel->getById($id);
            if (!is_null($scooter)) {
                $scooterModel->deleteById($id);
                $_SESSION['flash']['ok'] = "Scooter deleted";
                

            } else {
                $_SESSION['flash']['ko'] = "Scooter not found";
            }
            
        }

        header("Location: /scooter/index");
    }

    public function store()
    {
        $scooterModel = new Scooter();
        if(isset($_POST['scooter_store'])){
            $brain = $_POST['brain'] ?? null;
            $model = $_POST['model'] ?? null;
            $img = $_POST['img'] ?? null;
            $price = $_POST['price'] ?? null;


            if(empty($brain) || empty($model) ||  empty($price)){
                $_SESSION['flash']['ko'] = "All fields are required";
                $_SESSION['post'] = $_POST;
                header("Location: /scooter/index");
                die();
            }else if($_FILES['img']['name'] == null){
                $_SESSION['flash']['ko'] = "Image is required";
                $_SESSION['post'] = $_POST;
                header("Location: /scooter/index");
                die();
            }else{ 
                $array = explode(".", $_FILES['img']['name']);
                $extension = $array[count($array) - 1];

                
                $nameImg = "scooter - " . uniqid() .  "." . $extension;

                $src = $_FILES['img']['tmp_name'];
                $dst = "scooters";

                if(Store::store($src, $dst, $nameImg)){
                    $scooter = [
                        'brain' => $brain,
                        'model' => $model,
                        'img' => $nameImg,
                        'price' => $price,
                        'user_rent' => null,
                    ];
    
                    $id = $scooterModel->insert($scooter);
                    $_SESSION['flash']['ok'] = "Scooter created";
                }else{
                    $_SESSION['flash']['ko'] = "Error creating scooter";
                }

                
                header("Location: /scooter/index");
            
        }
    }
}
}
