<?php
require_once 'header.php';
require_once 'additonal/dbh.add.php';


 ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="test.css">
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
  </head>
  <body class="body1">

    <div class=card2>


      <table class="table">

        <thead>
          <tr>


              <th scope="col">Event Type</th>
              <th scope="col"> Event Date</th>
              <th scope="col"> Rating</th>
              <th scope="col"> Feedback</th>


          </tr>
        </thead>
        <tbody>

            <?php
         $sql="SELECT  * FROM events where status=1";
         $stmt = mysqli_stmt_init($conn);

         if (!mysqli_stmt_prepare($stmt, $sql)) {
           header("location: ../profile.php?error=stmtfailed");
           exit();
         }


         mysqli_stmt_execute($stmt);

         $resultData= mysqli_stmt_get_result($stmt);
         while ($row= mysqli_fetch_assoc($resultData)){
            $eventType=$row['eventType'];
            $eventDate=$row['eventDate'];
            $rating=$row['rating'];
            $feedback=$row['feedback'];


            echo '<tr>
            <th scope="row">'.  $eventType.'</th>
            <td>'.  $eventDate.'</td>
            <td>'.  $rating.'</td>
            <td>'.  $feedback.'</td>
            </tr>';

         }
         mysqli_stmt_close($stmt);


           ?>


        </tbody>


      </table>

    </div>
  </body>
</html>
