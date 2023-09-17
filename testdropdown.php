<select class="" name="">
  <?php
  require_once 'additonal/dbh.add.php';
  $sql="SELECT * FROM packages ;";
  $stmt = mysqli_stmt_init($conn);

  if (!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../signup.php?error=stmtfailed");
    exit();
  }

  mysqli_stmt_execute($stmt);
  $result= mysqli_stmt_get_result($stmt);
  while ($row = mysqli_fetch_assoc($result)){
   ?>
   <option value=""><?php echo $row['packageName']; ?></option>
  <?php } ?>
</select>
