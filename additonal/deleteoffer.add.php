<?php
	if (isset($_POST["submit"]))
	{
		$offerid = $_POST["offerid"];
		require_once 'dbh.add.php';
		require_once 'functions.add.php';

		 deleteoffer($conn, $offerid);
	}
