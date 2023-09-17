<?php
require_once 'dbh.add.php';

// Retrieve eventType and eventId values from the form
$rating = $_POST['rating'];
$eventId = $_POST['eventId'];


$stmt = $conn->prepare("UPDATE events SET rating = ? WHERE id = ?");
$stmt->bind_param("si", $rating, $eventId);
$stmt->execute();


if ($stmt->affected_rows > 0) {
  header("location: ../pastuserevents.php");
}

$stmt->close();
