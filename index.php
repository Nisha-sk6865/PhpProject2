<?php
session_start();
include_once 'Controllers/ctrlController.php';

// To create  database tables call this below block
//include_once "dbconnect.php";
//$dbcreate = new dbconnect;
//
//$dbcreate->createdb();
//$dbcreate->createver1();
//---end of db table creation block

$controller = new Controller();
$controller->invoke();
?>
