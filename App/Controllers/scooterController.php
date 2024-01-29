<?php
include_once(__DIR__ . "/../Models/Scooter.php");

class scooterController extends Controller
{

    public function index()
    {
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