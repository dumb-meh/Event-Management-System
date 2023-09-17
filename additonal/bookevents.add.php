<?php
require_once 'dbh.add.php';
require_once 'functions.add.php';
session_start();
if (isset($_POST["submit"])) {

$eventType = $_POST["eventType"];
$eventDetails = $_POST["eventDetails"];
$packageSelected = $_POST["packageSelected"];
$couponCode = $_POST["couponCode"];
$packagePrice = getPrice($conn, $packageSelected);
$off = getOff($conn, $couponCode);
$deduct = (float) $packagePrice * ((int) $off / 100.0);
$amount = (int) $packagePrice - (int) $deduct;




?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../test.css">
  </head>
  <body>
    <div class="container" style="background-color: #fff !important;">


      <form class="" action="eventconfirmation.php" method="post">
        <h1>Confirm Booking</h1><br><br>
        <input type="hidden" name="eventType" value="<?php echo $eventType; ?>">
        <input type="hidden" name="eventDetails" value="<?php echo $eventDetails; ?>">
        <input type="hidden" name="packageSelected" value="<?php echo $packageSelected; ?>">
        <input type="hidden" name="couponCode" value="<?php echo $couponCode; ?>">
        <input type="hidden" name="amount" value="<?php echo $amount; ?>">
        <table class="event-details">
          <tbody>
            <tr>
              <td class="login__input">Event Type</td>
              <td class="login__input"><?php echo $eventType; ?></td>
            </tr>
            <tr>
              <td class="login__input" style="padding-right:100px">Event Details</td>
              <td class="login__input"><?php echo $eventDetails; ?></td>
            </tr>
            <tr>
              <td class="login__input">Package Name</td>
              <td class="login__input"><?php echo $packageSelected; ?></td>
            </tr>
            <tr>
              <td class="login__input">Coupon Code</td>
              <td class="login__input"><?php echo $couponCode; ?></td>
            </tr>
            <tr>
              <td class="login__input">Total Amount</td>
              <td class="login__input"><?php echo $amount; ?></td>
            </tr>
          </tbody>
        </table>
        <button class="btn" type="submit" name="submit"><span class="button__text">Confirm Event Booking</span></button>
    </form>

    </div>
  </body>
</html>

<?php


           }  ?>
