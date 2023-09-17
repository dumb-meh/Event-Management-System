<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $conn = mysqli_connect("localhost", "root", "", "cse347lab");
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  $stmt = $conn->prepare("INSERT INTO subscription (name, email) VALUES (?, ?)");
  $stmt->bind_param("ss", $name, $email);
  if ($stmt->execute()) {
    echo "Data inserted successfully";
  } else {
    echo "Error: " . $stmt->error;
  }
  $stmt->close();
  mysqli_close($conn);

  header("location: index.php?error=none10");
  exit();
}
