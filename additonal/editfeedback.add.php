<?php
require_once 'dbh.add.php';

// Retrieve eventType and eventId values from the form
$feedback = $_POST['feedback'];
$eventId = $_POST['eventId'];


$stmt = $conn->prepare("UPDATE events SET feedback = ? WHERE id = ?");
$stmt->bind_param("si", $feedback, $eventId);
$stmt->execute();


if ($stmt->affected_rows > 0) {
  header("location: ../pastuserevents.php");
}

$stmt->close();
