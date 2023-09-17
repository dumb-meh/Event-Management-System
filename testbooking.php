<?php
require_once 'additonal/dbh.add.php';
require_once 'additonal/functions.add.php';
session_start();




$_SESSION["date"]= $_GET["date"];

 ?>


<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="test.css">
  </head>
  <body>
    <div class="container" >

      <form action="additonal\bookevents.add.php" method="post">
        <h1>Event Booking</h1><br>
      <select name="eventType" class="login__input" style="font-color:red">
        <option value="">Event Type</option>
        <option value="Wedding">Wedding</option>
        <option value="Holud Sondha">Holud Sondha</option>
        <option value="Birthday">Birthday</option>
        <option value="Convocation">Convocation</option>
        <option value="Corporate">Corporate</option>
        <option value="Other">Other</option>
      </select>
        <input class="login__input" type="text" name="eventDetails" placeholder="Event Details ..">

        <?php

        $stmt =$conn->prepare ("SELECT * FROM packages");
        if ($stmt->execute()){
          $result=$stmt->get_result();
        $options=array();
          if ($result->num_rows>0){
        while ($row=$result->fetch_assoc()){
          $options[]=$row['packageName'];

        }
      }
      $stmt->close();
    }


        echo "<select name='packageSelected' class='login__input'>";
        echo"<option>Select Package</option>";
        foreach ($options as $option) {
          echo"<option value='$option'>$option</option>";
        }
        echo "</select>";

         ?>

        <input class="login__input" type="text" name="couponCode" placeholder="Coupon Code ..">
          <button class="btn"type="submit" name="submit"><span class="button__text">Book Event</span></button>

      </form>
    </div>

  </body>
</html>
