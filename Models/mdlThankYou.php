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

class clsThankYou {

    private $pdo;
    public $cError;

    public function __construct() {

        $pdoDb = new dbconnect;
        $this->pdo = $pdoDb->OpenDB();
    }


}
