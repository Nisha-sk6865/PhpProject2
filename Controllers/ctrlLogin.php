<?php

//session_start();
include_once 'Models/mdlLogin.php';

class ctrlLoginController {

    public $model;

    public function __construct() {

        $this->model = new clsLogin();
    }

    public function invoke() {
        $page = filter_input(INPUT_GET, 'mdl', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->model->cError = "";
        if (isset($_POST['btnLogin'])) {

            if (isset($_POST["txtEmailId"])) {
                $this->model->cEmailId = filter_var($_POST["txtEmailId"], FILTER_SANITIZE_STRIPPED, FILTER_FLAG_ENCODE_HIGH);
            }
            if (isset($_POST["txtpsw"])) {
                $this->model->nPhoneNum = filter_var($_POST["txtpsw"], FILTER_SANITIZE_STRIPPED, FILTER_FLAG_ENCODE_HIGH);
            }
            $this->model->save();
            require "Views/vewLogin.php";
        } else {
            $this->model->cError = "";
            require "Views/vewLogin.php";
        }
    }

}

?>
