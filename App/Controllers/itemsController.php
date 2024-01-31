<?php 

    class itemsController extends Controller{
            
            public function index(){

                $this->render("items/list", [], "site");
            }

    }

?>