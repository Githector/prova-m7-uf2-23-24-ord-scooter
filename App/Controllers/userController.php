<?php 

    class userController extends Controller{
            
            public function login(){

                $_SESSION['user'] = $_POST['username'] ?? null;
                if($_SESSION['user'] == null){
                    header("Location: /main/index");
                }else{
                    header("Location: /scooter/index");
                }
                
            }

    }

?>