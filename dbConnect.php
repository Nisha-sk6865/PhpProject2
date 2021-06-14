<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class dbconnect {

    private $pdo;
    private $dsn;
    private $user;
    private $passwd;

    public function __construct() {
        $this->dsn = "mysql:host=localhost;dbname=Task";
        $this->user = "root";
        $this->passwd = "";
    }

    public function createdb() {
        $this->OpenDB();

        $cSql = "CREATE TABLE  `Registration` (
                `Reg_UserName` varchar(50) NOT NULL DEFAULT '\'\'',
                `Reg_Email` varchar(50) NOT NULL DEFAULT '\'\'',
                `Reg_PhoneNumber` int(10) NOT NULL DEFAULT 0,
                `Reg_Passward` varchar(50) NOT NULL DEFAULT '\'\''
                )";
        $stm = $this->pdo->exec($cSql);
           $cSql = "CREATE TABLE  `Login` (
                `Log_Email` varchar(50) NOT NULL DEFAULT '\'\'',
                `Reg_Passward` varchar(50) NOT NULL DEFAULT '\'\'' )";
        $stm = $this->pdo->exec($cSql);
        echo $stm;

    }

    public function OpenDB() {
        try {
            $this->pdo = new PDO($this->dsn, $this->user, $this->passwd);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Could not connect to the database: ' . $e->getMessage());
        }

        return $this->pdo;
    }

}
