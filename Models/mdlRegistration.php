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

class clsRegistration {

    public $cUserName = "";
    private $pdo;
    public $cEmailId = "";
    public $nPhoneNum = "";
    public $cPswd = "";
    public $cError;

    public function __construct() {

        $pdoDb = new dbconnect;
        $this->pdo = $pdoDb->OpenDB();
    }

    public function save() {
        $cError = "";
        $sql = $this->pdo->prepare("SELECT `Reg_UserName`, `Reg_Email`, `Reg_PhoneNumber`, `Reg_Passward` FROM `registration` WHERE  `Reg_Email`=:EmailId");
        $sql->bindParam(':EmailId', $this->cEmailId);
        $sql->execute();
        $row = $sql->fetch(PDO::FETCH_ASSOC);
        if ($row != false) {
            $this->cError = "Name already exists,Enter a new Name";
        } else {
            $sql1 = "INSERT INTO `registration`(`Reg_UserName`, `Reg_Email`, `Reg_PhoneNumber`, `Reg_Passward`) VALUES ('" . $this->cUserName . "','" . $this->cEmailId . "'," . $this->nPhoneNum . ",'" . $this->cPswd . "')";
            $count = $this->pdo->exec($sql1);
            if ($count > 0) {
                $this->cError = "successfully Registred ";
                header("location:index.php?mdl=3");
            } else {
                $this->cError = "Unable to Save your Data A problem exists with Codes. Cannot Continue";
            }
        }
    }

    public function close() {
        $this->cUserName = "";
        $this->cEmailId = "";
        $this->nPhoneNum = "";
        $this->cPswd = "";
        $this->cError = "";
    }

}
