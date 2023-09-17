<?php
	if (isset($_POST["submit"]))
	{
		$id = $_POST["id"];
		require_once 'dbh.add.php';
		require_once 'functions.add.php';

		deleteEvent($conn, $id);
	}
