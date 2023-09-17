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
      <form action="additonal\createpackage.add.php" method="post">
        <input class="login__input" type="text" name="packageName" placeholder="Package Name..">
        <input class="login__input" type="text" name="packageDetails" placeholder="Package Details ..">
        <input class="login__input" type="text" name="price" placeholder="Price ..">
          <button class="btn"type="submit" name="submit"><span class="button__text">Add Package</span></button><br><br>

      </form>
    </div>

  </body>
</html>
