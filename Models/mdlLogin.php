<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of mdlGroup
 *
 * @author Girish
 */
include_once 'dbconnect.php';

class clsLogin {

    private $pdo;
    public $cEmailId = "";
    public $cPswd = "";
    public $cError;

    public function __construct() {

        $pdoDb = new dbconnect;
        $this->pdo = $pdoDb->OpenDB();
    }

    public function save() {
        $cError = "";
       $cError = "";
        $sql = $this->pdo->prepare("SELECT `Reg_UserName`, `Reg_Email`, `Reg_PhoneNumber`, `Reg_Passward` FROM `registration` WHERE  `Reg_Email`=:Name");
        $sql->bindParam(':Name', $this->cEmailId);
        $sql->execute();
        $row = $sql->fetch(PDO::FETCH_ASSOC);
         if ($row != false)  {

            $sql1 = "INSERT INTO `login`(`Log_Email`, `Log_Passward`) VALUES ('" . $this->cEmailId . "','" . $this->cPswd . "' )";
            $count = $this->pdo->exec($sql1);
            if ($count > 0) {
                $this->cError = "Successfully LoggedIn ";
                header("location:index.php?mdl=4");
            } else {
                $this->cError = "Unable to Save your Data A problem exists with Codes. Cannot Continue";
            }
        } else {
            $this->cError = "Please Enter a Valid EmailId";
        }
    }

    public function close() {
        $this->cEmailId = "";
        $this->cPswd = "";
        $this->cError = "";
    }

}
