
<?php

include_once 'Models/mdlContact.php';

class ctrlContactController {

    public $model;
    public $cError;

    public function __construct() {
        $this->model = new clsContact();
        $this->cError = "";
    }

    public function invoke() {
        $page = filter_input(INPUT_GET, 'mdl', FILTER_SANITIZE_SPECIAL_CHARS);
        if (isset($_POST['btnSend'])) {
            if (isset($_POST["txtfirst"])) {
                $this->model->cUserName1 = filter_var($_POST["txtfirst"], FILTER_SANITIZE_STRIPPED, FILTER_FLAG_ENCODE_HIGH);
                //  $_SESSION ['UserName'] = $this->model->cUserName;
            }
            if (isset($_POST["txtlast"])) {
                $this->model->cUserName2 = filter_var($_POST["txtlast"], FILTER_SANITIZE_STRIPPED, FILTER_FLAG_ENCODE_HIGH);
                //  $_SESSION ['UserName'] = $this->model->cUserName;
            }
            if (isset($_POST["txtemail"])) {
                $this->model->cEmailId = filter_var($_POST["txtemail"], FILTER_SANITIZE_STRIPPED, FILTER_FLAG_ENCODE_HIGH);
            }
            if (isset($_POST["txtphone"])) {
                $this->model->nPhoneNum = filter_var($_POST["txtphone"], FILTER_SANITIZE_STRIPPED, FILTER_FLAG_ENCODE_HIGH);
            }
            if (isset($_POST["txtmessage"])) {
                $this->model->cMsg = filter_var($_POST["txtmessage"], FILTER_SANITIZE_STRIPPED, FILTER_FLAG_ENCODE_HIGH);
            }
            if ($this->model->cUserName1 != "" && $this->model->cUserName2 != "" && $this->model->cEmailId != "" && $this->model->nPhoneNum != "" && $this->model->cMsg) {
                $this->model->save();
            } else {
                $this->cError = "Unable to Save your Data A problem exists with Codes. Cannot Continue";
            }

            require "Views/vewContact.php";
        } elseif (isset($_POST['btnclear'])) {
            $this->model->close();
            require "Views/vewContact.php";
        } else {
            require "Views/vewContact.php";
        }
    }

}

?>