<?php

//session_start();
include_once 'Models/mdlHome.php';

class ctrlHomeController {

    public $model;

    public function __construct() {

        $this->model = new clsHome();
    }

    public function invoke() {
        $page = filter_input(INPUT_GET, 'mdl', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->model->cError = "";
      
            $this->model->cError = "";
            require "Views/vewHome.php";
        }
    }



?>
