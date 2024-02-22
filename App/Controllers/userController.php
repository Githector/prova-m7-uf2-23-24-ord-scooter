<?php

include_once(__DIR__ . "/../Models/User.php");
class userController extends Controller
{

    public function login()
    {

        $username = $_POST['username'] ?? null;
        $pass = $_POST['password'] ?? null;



        if ($username == null || $pass == null) {
            header("Location: /main/index");
        } else {

            $userModel = new User();
            $result = $userModel->checkLogin($username, $pass);
            if ($result) {
                $_SESSION['user'] = $result['username'];
                $_SESSION['id'] = $result['id'];
                header("Location: /scooter/index");
                die();
            } else {
                $_SESSION['flash']['error'] = "User not found";
                header("Location: /main/index");
            }
        }
    }
}
