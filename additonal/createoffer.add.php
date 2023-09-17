<?php
	if (isset($_POST["submit"]))
	{
		$offerDetails = $_POST["offerDetails"];
    $couponCode = $_POST["couponCode"];
    $validtill = $_POST["validtill"];
		require_once 'dbh.add.php';
		require_once 'functions.add.php';

		 createoffer($conn,$offerDetails, $couponCode,$validtill);
	}
