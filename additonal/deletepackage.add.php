<?php
	if (isset($_POST["submit"]))
	{
		$packageid = $_POST["packageid"];
		require_once 'dbh.add.php';
		require_once 'functions.add.php';

		deletepackage($conn, $packageid);
	}
