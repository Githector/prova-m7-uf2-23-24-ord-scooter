<?php 

    class mainController extends Controller{
            
            public function index(){
                $_SESSION['user'] = null;
                $this->render("main/index", [], "site");
            }

    }

?>