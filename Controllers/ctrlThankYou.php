<?php

//session_start();
include_once 'Models/mdlThankYou.php';

class ctrlThankYouController {

    public $model;

    public function __construct() {

        $this->model = new clsThankYou();
    }

    public function invoke() {
        $page = filter_input(INPUT_GET, 'mdl', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->model->cError = "";
      
            $this->model->cError = "";
            require "Views/vewThankYou.php";
        }
    }



?>
