<?php
	if (isset($_POST["submit"]))
	{
		$username = $_POST["uid"];
		require_once 'dbh.add.php';
		require_once 'functions.add.php';

		 createadmin($conn, $username,$username);
	}
