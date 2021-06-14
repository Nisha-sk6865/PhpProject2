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

class clsContact {

    private $pdo;
    public $cEmailId = "";
    public $nPhoneNum = "";
    public $cUserName1 = "";
    public $cUserName2 = "";
    public $cMsg = "";
    public $cError;

    public function __construct() {

        $pdoDb = new dbconnect;
        $this->pdo = $pdoDb->OpenDB();
    }

    public function save() {
       header("location:index.php?mdl=3");
       
    }
} 