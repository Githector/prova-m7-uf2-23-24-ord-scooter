<?php 

    class itemsController extends Controller{
            
            public function index(){
                $params = null;
                if(isset($_SESSION['flash'])){
                    $params['flash'] = $_SESSION['flash'];
                    unset($_SESSION['flash']);
                }
                $this->render("items/index", $params, "site");
            }

            public function dni(){
                $dni = $_POST['dni'] ?? null;
                if($dni == null || empty($dni)){
                    $_SESSION['flash']['error'] = "DNI no trobat";
                    header("Location: /items/index");
                    return;
                }

                switch($dni){
                    case "48040041X": //Jordi F
                        $this->render("items/48040041X", null, "site");
                        break;
                    case "47958390D": //Nil P
                        $this->render("items/47958390D", null, "site");
                        break;
                    case "48045092R": //Jan P
                        $this->render("items/48045092R", null, "site");
                        break;
                    case "45172543Z": //Jan C
                        $this->render("items/45172543Z", null, "site");
                        break;
                    default:
                        $_SESSION['flash']['error'] = "Usuari no trobat";
                        header("Location: /items/index");
                        break;
                }

    }
}
?>