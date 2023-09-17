<?php
require_once 'userheader.php';
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
      <table width=500px border='5' cellpadding='10' style='border:3px solid white; border-collapse:collapse'>
        <thead>
          <tr>
              <th width=100px> Package Name</th>
                <th width=100px> Package Details</th>
                  <th width=100px> Price</th>
          </tr>
        </thead>
        <tbody>
          <tr>            
        <td class="td1" text-align:center>
              <?php
         $sql="SELECT * FROM packages;";
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
        $sql="SELECT * FROM packages;";
        $result=mysqli_query($conn,$sql);
        $resultCheck=mysqli_num_rows($result);
        if ($resultCheck>0){
          while ($row = mysqli_fetch_assoc($result)){
            echo $row['packageDetails'];
            echo "<br>";
            echo "<br>";


          }

        }
            ?>
          </td>

          <td class="td1" text-align:center>
            <?php
       $sql="SELECT * FROM packages;";
       $result=mysqli_query($conn,$sql);
       $resultCheck=mysqli_num_rows($result);
       if ($resultCheck>0){
         while ($row = mysqli_fetch_assoc($result)){
           echo $row['price'];
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
