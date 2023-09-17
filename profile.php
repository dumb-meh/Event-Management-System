<?php
require_once 'additonal/dbh.add.php';
require_once 'additonal/functions.add.php';
require_once 'userheader.php';

if (isset($_SESSION["usersUid"])) {
  $error = "";
 if (isset($_GET["error"])) {
   if ($_GET["error"] == "none8") {
     echo "<span style='padding-left: 850px !important; padding-top:50px !important; color: blue; font-size: 20px;'>Success! Event has been booked</span>";

   }
 }

 ?>
 <?php
 $uid=$_SESSION["usersUid"];
 $sql = "SELECT image FROM users WHERE usersUid=?";
 $stmt = mysqli_stmt_init($conn);

 if (!mysqli_stmt_prepare($stmt, $sql)) {
     header("location: profile.php?error=stmtfailed");
     exit();
 }

 mysqli_stmt_bind_param($stmt, "s", $uid);
 mysqli_stmt_execute($stmt);
 $result = mysqli_stmt_get_result($stmt);

 if ($row = mysqli_fetch_assoc($result)) {
     $imagePath = "img/profilepic/" . $row['image'];
 } else {
     $imagePath = "img/profilepic/default.png"; // set a default image path
 }
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
    <link rel="stylesheet" href="profile.css">
  </head>
  <body class="body1">
    <div class="container">
        <div class="main-body">



              <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-column align-items-center text-center">
                        <img src="<?php echo $imagePath; ?>" alt="Profile Picture" class="rounded-circle" width="150">
                        <form class="card-body2" action="editprofilepicture.php" method="post">
                          <button type="submit" class="btn btn-primary" name="button">Change Profile Picture</button>
                        </form>
                        <div class="mt-3">
                          <h4><?php
                            $uid=$_SESSION["usersUid"];
                           $profileName=uidExists($conn, $uid, $uid);
                           echo $profileName['profileName'];
                             ?>
                           </h4>
                          <p class="text-secondary mb-1">
                            <?php
                            $uid=$_SESSION["usersUid"];
                           $about=uidExists($conn, $uid, $uid);
                           echo $about['about'];
                             ?>
                           </p>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="col-md-8">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Full Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <?php
                     $uid=$_SESSION["usersUid"];
                    $name=uidExists($conn, $uid, $uid);
                    echo $name['usersName'];

                         ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <?php
                          $uid=$_SESSION["usersUid"];
                         $email=uidExists($conn, $uid, $uid);
                         echo $email['usersEmail'];
                         ?>
                        </div>
                      </div>
                      <hr>

                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Username</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <?php
                     $uid=$_SESSION["usersUid"];
                     echo $uid;
                         ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Mobile</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <?php
                          $uid=$_SESSION["usersUid"];
                         $mobile=uidExists($conn, $uid, $uid);
                         echo $mobile['mobile'];
                         ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Address</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <?php
                          $uid=$_SESSION["usersUid"];
                         $address=uidExists($conn, $uid, $uid);
                         echo $address['adress'];
                           ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-12">
                          <a class="btn btn-info "  onclick="window.location.href ='editprofile.php';">Edit</a>
                        </div>
                      </div>
                    </div>
                  </div>





                </div>
              </div>

            </div>
        </div>


  </body>
</html>
<?php } ?>
