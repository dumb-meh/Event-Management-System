<?php
require_once 'adminheader.php';
require_once 'additonal/dbh.add.php';
require_once 'additonal/functions.add.php'; ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="test.css">
  </head>
  <body class="body1">

    <div class=card1>
      <form action="createevent.php" method="post">
  <button class="button login__submit"type="submit" name="submit"><span class="button__text">Add Event</span></button><br><br>
      </form>

      <form action="deleteevent.php" method="post">
  <button class="button login__submit" type="submit" name="submit"><span class="button__text">Delete Event</span></button><br><br>
      </form>

      <table width=800px border='5' cellpadding='10' style='border:3px solid white; border-collapse:collapse'>

        <thead>
          <tr>
            <th width=100px>Event Id</th>
            <th width=100px>Username</th>
              <th width=100px>Event Type</th>
                <th width=100px> Event Details</th>
                  <th width=100px> Package Name</th>
                    <th width=100px> Coupon Code</th>
                      <th width=100px> Total Amount</th>
                        <th width=200px> Event Date</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="td1" text-align:center>
              <?php
         $sql="SELECT id  FROM events;";
         $result=mysqli_query($conn,$sql);
         $resultCheck=mysqli_num_rows($result);
         if ($resultCheck>0){
           while ($row = mysqli_fetch_assoc($result)){
             echo $row['id'];
             echo "<br>";
             echo "<br>";


           }

         }
             ?>
           </td>

           <td class="td1" text-align:center>
             <?php
        $sql="SELECT username FROM events;";
        $result=mysqli_query($conn,$sql);
        $resultCheck=mysqli_num_rows($result);
        if ($resultCheck>0){
          while ($row = mysqli_fetch_assoc($result)){
            echo $row['username'];
            echo "<br>";
            echo "<br>";


          }

        }
            ?>
          </td>

          <td class="td1" text-align:center>
            <?php
         $sql="SELECT eventType FROM events;";
         $result=mysqli_query($conn,$sql);
         $resultCheck=mysqli_num_rows($result);
         if ($resultCheck>0){
         while ($row = mysqli_fetch_assoc($result)){
           echo $row['eventType'];
           echo "<br>";
           echo "<br>";


         }

         }
           ?>
         </td>

         <td class="td1" text-align:center>
           <?php
      $sql="SELECT eventDetails FROM events;";
      $result=mysqli_query($conn,$sql);
      $resultCheck=mysqli_num_rows($result);
      if ($resultCheck>0){
        while ($row = mysqli_fetch_assoc($result)){
          echo $row['eventDetails'];
          echo "<br>";
          echo "<br>";


        }

      }
          ?>
        </td>

        <td class="td1" text-align:center>
          <?php
     $sql="SELECT packageName FROM events;";
     $result=mysqli_query($conn,$sql);
     $resultCheck=mysqli_num_rows($result);
     if ($resultCheck>0){
       while ($row = mysqli_fetch_assoc($result)){
         echo $row['packageName'];
         echo "<br>";
         echo "<br>";


       }

     }
         ?>
       </td>

       <td class="td1" text-align:center>
         <?php
    $sql="SELECT couponCode FROM events;";
    $result=mysqli_query($conn,$sql);
    $resultCheck=mysqli_num_rows($result);
    if ($resultCheck>0){
      while ($row = mysqli_fetch_assoc($result)){
        echo $row['couponCode'];
        echo "<br>";
        echo "<br>";


      }

    }
        ?>
      </td>

      <td class="td1" text-align:center>
        <?php
   $sql="SELECT amount FROM events;";
   $result=mysqli_query($conn,$sql);
   $resultCheck=mysqli_num_rows($result);
   if ($resultCheck>0){
     while ($row = mysqli_fetch_assoc($result)){
       echo $row['amount'];
       echo "<br>";
       echo "<br>";


     }

   }
       ?>
     </td>

     <td class="td1" text-align:center>
       <?php
  $sql="SELECT eventDate FROM events;";
  $result=mysqli_query($conn,$sql);
  $resultCheck=mysqli_num_rows($result);
  if ($resultCheck>0){
    while ($row = mysqli_fetch_assoc($result)){
      echo $row['eventDate'];
      echo "<br>";
      echo "<br>";


    }

  }
      ?>
    </td>




          </tr>

        </tbody>


      </table>

    </div>
  </body>
</html>
