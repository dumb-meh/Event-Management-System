<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "cse347lab";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else{
  
}
