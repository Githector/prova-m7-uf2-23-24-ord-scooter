<?php 

    class itemsController extends Controller{
            
            public function list(){

                $this->render("items/list", [], "site");
            }

    }

?>