<?php
require_once 'additonal/dbh.add.php';
require_once 'additonal/functions.add.php';
$eventId = $_GET["eventId"];

?>


<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="test.css">
  </head>
  <body>
    <div class="container">
      <form action="additonal\editrating.add.php" method="post">
        <select name="rating" class="login__input" style="font-color:red">
          <option value="">Rating</option>
          <option value="1">*</option>
          <option value="2">**</option>
          <option value="3">***</option>
          <option value="4">****</option>
          <option value="5">*****</option>
          <input type="hidden" name="eventId" value="<?php echo $eventId; ?>">

        </select>
          <button class="btn"type="submit" name="submit"><span class="button__text">Edit Rating</span></button><br><br>

      </form>
    </div>

  </body>
</html>
