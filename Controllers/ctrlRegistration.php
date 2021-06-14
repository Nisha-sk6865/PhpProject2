
<?php

include_once 'Models/mdlRegistration.php';

class ctrlRegistrationController {

    public $model;
    public $cError;

    public function __construct() {
        $this->model = new clsRegistration();
        $this->cError = "";
    }

    public function invoke() {
        $page = filter_input(INPUT_GET, 'mdl', FILTER_SANITIZE_SPECIAL_CHARS);
        if (isset($_POST['btnRegister'])) {
            if (isset($_POST["txtUserName"])) {
                $this->model->cUserName = filter_var($_POST["txtUserName"], FILTER_SANITIZE_STRIPPED, FILTER_FLAG_ENCODE_HIGH);
               // echo"<br>" . $this->model->cUserName;
            }
            if (isset($_POST["txtEmail"])) {
                $this->model->cEmailId = filter_var($_POST["txtEmail"], FILTER_SANITIZE_STRIPPED, FILTER_FLAG_ENCODE_HIGH);
              //  echo"<br>" . $this->model->cEmailId;
            }
            if (isset($_POST["txtPhoneNo"])) {
                $this->model->nPhoneNum = filter_var($_POST["txtPhoneNo"], FILTER_SANITIZE_STRIPPED, FILTER_FLAG_ENCODE_HIGH);
             //   echo"<br>" . $this->model->nPhoneNum;
            }
            if (isset($_POST["txtpsw"])) {
                $this->model->cPswd = filter_var($_POST["txtpsw"], FILTER_SANITIZE_STRIPPED, FILTER_FLAG_ENCODE_HIGH);
            //    echo"<br>" . $this->model->cPswd;
            }
            
            $this->model->save();
            require "Views/vewRegistration.php";
        } elseif (isset($_POST['btnclear'])) {
            $this->model->close();
            require "Views/vewRegistration.php";
        } else {
            require "Views/vewRegistration.php";
        }
    }

}

?>