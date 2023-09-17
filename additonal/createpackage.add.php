<?php
	if (isset($_POST["submit"]))
	{
		$packageName = $_POST["packageName"];
    $packageDetails = $_POST["packageDetails"];
    $price = $_POST["price"];
		require_once 'dbh.add.php';
		require_once 'functions.add.php';

		 createpackage($conn,$packageName, $packageDetails,$price);
	}
