<?php
require_once 'additonal/dbh.add.php';
require_once 'additonal/functions.add.php';
if (isset($_POST["submit"])) {

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message=$_POST["message"];

contactUs($name, $email, $phone, $message, $conn);
}
