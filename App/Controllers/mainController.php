<?php 

    class mainController extends Controller{
            
            public function index(){
                $_SESSION['user'] = null;
                $params['user'] = $_SESSION['user'] ?? null;
                if(isset($_SESSION['flash'])){
                    $params['flash'] = $_SESSION['flash'];
                    unset($_SESSION['flash']);
                }
                $this->render("main/index", $params, "site");
            }

            

    }

?>