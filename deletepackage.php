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
      <form action="additonal/deletepackage.add.php" method="post">
      <input class="login__input" type="text" name="packageid" placeholder="Type in the Package Id ..">
        <button class="btn"type="submit" name="submit"><span class="button__text">Delete Package</span></button><br><br>

      </form>

    </div>
  </body>
</html>
