<?php
session_start();
	if (isset($_POST["submit"]))
	{
		$usersName = $_POST["usersName"];
    $profileName = $_POST["profileName"];
    $mobile = $_POST["mobile"];
    $about = $_POST["about"];
    $address = $_POST["address"];
    $uid=$_SESSION["usersUid"];

		require_once 'dbh.add.php';
		require_once 'functions.add.php';

		 editprofile($conn,$usersName,$profileName,$mobile,$about, $address,$uid);
	}
