<?php
require_once 'additonal/dbh.add.php';
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
      <form action="additonal\editfeedback.add.php" method="post">
        <input class="login__input" type="text" name="feedback" placeholder="Write Feedback..">
        <input type="hidden" name="eventId" value="<?php echo $eventId; ?>">
          <button class="btn"type="submit" name="submit"><span class="button__text">Edit Feedback</span></button><br><br>

      </form>
    </div>

  </body>
</html>
