<?php
require_once 'userheader.php';
require_once 'additonal/dbh.add.php';
require_once 'additonal/functions.add.php';
$uid=$_SESSION["usersUid"];
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
              <th scope="col"> Event Details</th>
              <th scope="col"> Package Used</th>
              <th scope="col"> Coupon Code Used</th>
              <th scope="col"> Total Amount</th>
              <th scope="col"> Event Date</th>
              <th scope="col"> Rating</th>
              <th scope="col"> Feedback</th>


          </tr>
        </thead>
        <tbody>

            <?php
         $sql="SELECT  * FROM events where username=?;";
         $stmt = mysqli_stmt_init($conn);

         if (!mysqli_stmt_prepare($stmt, $sql)) {
           header("location: ../profile.php?error=stmtfailed");
           exit();
         }

         mysqli_stmt_bind_param($stmt, "s", $uid);
         mysqli_stmt_execute($stmt);

         $resultData= mysqli_stmt_get_result($stmt);
         while ($row= mysqli_fetch_assoc($resultData)){
            $eventId=$row['id'];
            $eventType=$row['eventType'];
            $eventDetails=$row['eventDetails'];
            $packageName=$row['packageName'];
            $couponCode=$row['couponCode'];
            $amount=$row['amount'];
            $eventDate=$row['eventDate'];
            $rating=$row['rating'];
            $feedback=$row['feedback'];
            $status=$row['status'];

            echo '<tr>
            <th scope="row">'.  $eventType.'</th>
            <td>'.  $eventDetails.'</td>
            <td>'.  $packageName.'</td>
            <td>'.  $couponCode.'</td>
            <td>'.  $amount.'</td>
            <td>'.  $eventDate.'</td>
            <td>'.  $rating.'</td>
            <td>'.  $feedback.'</td>';
            if ($status == 1) {
    echo '<td>
        <form action="editrating.php"><input type="hidden" name="eventId" value="'. $eventId. '"><button class="btn btn-primary" type="submit" name="submit"> Edit Rating</button></form>
        <form action="editfeedback.php"><input type="hidden" name="eventId" value="'. $eventId. '"><button class="btn btn-primary" type="submit" name="submit"> Edit Feedback</button></form>
    </td>';
}



            echo '</tr>';

         }
         mysqli_stmt_close($stmt);


           ?>


        </tbody>


      </table>

    </div>
  </body>
</html>
