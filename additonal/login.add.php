<?php
	if (isset($_POST["submit"]))
	{
		$username = $_POST["username"];
		$password = $_POST["password"];

		require_once 'dbh.add.php';
		require_once 'functions.add.php';

		if(emptyInputLogin($username, $password) )
		{
			header("location: ../login.php?error=emptyinput");
			exit();
		}

		loginUser($conn, $username, $password);
	}
	else
	{
		header("location: ../login.php");
		exit();
	}
