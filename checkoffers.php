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

       <form action="crateoffer.php" method="post">
   <button class="button login__submit"type="submit" name="submit"><span class="button__text">Add Offers</span></button><br><br>
       </form>

       <form action="deleteoffer.php" method="post">
   <button class="button login__submit" type="submit" name="submit"><span class="button__text">Delete Offers</span></button><br><br>
       </form>
       
      <table width=500px border='5' cellpadding='10' style='border:3px solid white; border-collapse:collapse'>
        <thead>
          <tr>
            <th width=100px> Offer Id</th>
              <th width=200px> Offer Details</th>
                <th width=200px> Coupon Code</th>
                  <th width=150px> Valid Till</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="td1" text-align:center>
              <?php
         $sql="SELECT * FROM offers;";
         $result=mysqli_query($conn,$sql);
         $resultCheck=mysqli_num_rows($result);
         if ($resultCheck>0){
           while ($row = mysqli_fetch_assoc($result)){
             echo $row['offerid'];
             echo "<br>";
             echo "<br>";


           }

         }
             ?>
           </td>

           <td class="td1" text-align:center>
             <?php
        $sql="SELECT * FROM offers;";
        $result=mysqli_query($conn,$sql);
        $resultCheck=mysqli_num_rows($result);
        if ($resultCheck>0){
          while ($row = mysqli_fetch_assoc($result)){
            echo $row['offerDetails'];
            echo "<br>";
            echo "<br>";


          }

        }
            ?>
          </td>

          <td class="td1" text-align:center>
            <?php
       $sql="SELECT * FROM offers;";
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
      $sql="SELECT * FROM offers;";
      $result=mysqli_query($conn,$sql);
      $resultCheck=mysqli_num_rows($result);
      if ($resultCheck>0){
        while ($row = mysqli_fetch_assoc($result)){
          echo $row['validtill'];
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
