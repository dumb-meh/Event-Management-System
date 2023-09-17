<?php
require_once 'additonal/dbh.add.php';
require_once 'additonal/functions.add.php'; ?>


<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="test.css">
  </head>
  <body>
    <div class="container">
      <form action="additonal\createevent.add.php" method="post">
        <input class="login__input" type="text" name="username" placeholder="Username..">
        <input class="login__input" type="text" name="eventType" placeholder="Event Type ..">
        <input class="login__input" type="text" name="eventDetails" placeholder="Event Details ..">
        <input class="login__input" type="text" name="packageName" placeholder="Package Name ..">
        <input class="login__input" type="text" name="couponCode" placeholder="Coupon Code ..">
        <input class="login__input" type="text" name="amount" placeholder="Total Amount ..">
        <input class="login__input" type="date" name="eventDate" placeholder="Event Date ..">
          <button class="btn"type="submit" name="submit"><span class="button__text">Add Event</span></button><br><br>

      </form>
    </div>

  </body>
</html>
