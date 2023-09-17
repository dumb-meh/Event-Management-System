<?php
require_once 'dbh.add.php';
require_once 'functions.add.php';
session_start();
if (isset($_POST["submit"])) {

$username=$_POST["username"];
$eventType = $_POST["eventType"];
$eventDetails = $_POST["eventDetails"];
$packageSelected = $_POST["packageName"];
$couponCode = $_POST["couponCode"];
$amount =$_POST["amount"];
$date =$_POST["eventDate"];

addEvent($conn, $username, $eventType, $eventDetails, $packageSelected, $couponCode, $amount, $date);}
