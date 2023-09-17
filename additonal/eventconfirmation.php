<?php
require_once 'dbh.add.php';
require_once 'functions.add.php';
session_start();
if (isset($_POST["submit"])) {

$eventType = $_POST["eventType"];
$eventDetails = $_POST["eventDetails"];
$packageSelected = $_POST["packageSelected"];
$couponCode = $_POST["couponCode"];
$uid=$_SESSION["usersUid"];
$date=$_SESSION["date"];
$packagePrice = $_POST["packagePrice"];
$amount = $_POST["amount"];

confirmBooking($conn, $uid, $eventType, $eventDetails, $packageSelected, $couponCode, $amount, $date);}
