
<?php

include_once 'Models/mdlStartpg.php';

class ctrlStartpgController {

    public $model;
    public $cError;

    public function __construct() {
        $this->model = new clsStartpg();
        $this->cError = "";
    }

    public function invoke() {
        $page = filter_input(INPUT_GET, 'mdl', FILTER_SANITIZE_SPECIAL_CHARS);
      
            require "Views/vewStartpg.php";
        }
    }



?>