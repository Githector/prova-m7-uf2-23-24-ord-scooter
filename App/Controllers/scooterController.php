<?php
include_once(__DIR__ . "/../Models/Scooter.php");

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
}
