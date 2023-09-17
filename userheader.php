<?php
 session_start();
 ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AOM Planners</title>
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>






  </head>
  <body>
    <?php
    if (isset($_SESSION["usersName"])) {
      echo"<p style='margin-top:100px; color:white; font-size:50px;' >Hello! ".$_SESSION["usersName"]."</p>";
    }
     ?>
    <!--header work start-->
    <header class="header">
      <img alt="Picture" class="rounded" src="rsz_logo.png">

      <nav class="navigation">
        <a href="profile.php">Profile</a>
        <a href="useroffer.php">Offers</a>
        <a href="userpackage.php">Packages</a>
        <a href="bookevents.php">Events</a>
        <a href="pastuserevents.php">Past Events</a>
        <button class="btnLogin-popup" onclick="window.location.href = 'additonal/logout.add.php';">Log Out</button>
      </nav>
    </header>
  </body>
  </html>
