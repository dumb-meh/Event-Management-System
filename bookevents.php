<?php
require_once 'additonal/dbh.add.php';
require_once 'additonal/functions.add.php';
require_once 'userheader.php';

 ?>

 <html lang="en" dir="ltr">
   <head>
     <meta name="viewport" content="width=device-width,initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="css/all.css">
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
     <style>
       table{
         table-layout: fixed;
       }
       td{
         width: 33%;
       }
       .today{
         background: yellow !important;
       }
     </style>

   </head>
   <body>
     <div class="container">
       <div class="row">
         <div class="col-md-12">
           <?php
           $dateComponents=getdate();
           $month= $dateComponents['mon'];
           $year= $dateComponents['year'];
           echo build_calendar($month,$year,$conn);

            ?>

         </div>

       </div>

     </div>

   </body>
 </html>
