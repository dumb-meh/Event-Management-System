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
  <body>
    <?php
      if( isset($_GET["error"]) )
      {
        if( $_GET["error"] == "None" )
        {
          echo '<span style="color:red;">New Admin Created!</span>';
        }

      }
    ?>
    <div class=card1>
      <form action="createadminform.php" method="post">
  <button class="button login__submit"type="submit" name="submit"><span class="button__text">Add Admin</span></button><br><br>
      </form>

      <form action="deleteadminform.php" method="post">
  <button class="button login__submit" type="submit" name="submit"><span class="button__text">Delete Admin</span></button><br><br>
      </form>

      <table width=500px border='10' cellpadding='10' style='border:3px solid skyblue; border-collapse:collapse'>
        <thead>
          <tr>
            <th width=150px>Name</th>
            <th width=100px>Username</th>
            <th width=100px>Email</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td text-align:center>
              <?php
         $sql="SELECT * FROM users WHERE role='1'";
         $result=mysqli_query($conn,$sql);
         $resultCheck=mysqli_num_rows($result);
         if ($resultCheck>0){
           while ($row = mysqli_fetch_assoc($result)){
             echo $row['usersName'];
             echo "<br>";
             echo "<br>";


           }

         }
             ?>
           </td>
            <td text-align:center>
              <?php
         $sql="SELECT * FROM users WHERE role='1'";
         $result=mysqli_query($conn,$sql);
         $resultCheck=mysqli_num_rows($result);
         if ($resultCheck>0){
           while ($row = mysqli_fetch_assoc($result)){
             echo $row['usersUid'];
             echo "<br>";
             echo "<br>";

           }

         }
             ?>
           </td>

           <td text-align:center>
             <?php
        $sql="SELECT * FROM users WHERE role='1'";
        $result=mysqli_query($conn,$sql);
        $resultCheck=mysqli_num_rows($result);
        if ($resultCheck>0){
          while ($row = mysqli_fetch_assoc($result)){
            echo $row['usersEmail'];
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
