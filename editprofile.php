<?php
require_once 'additonal/dbh.add.php';
require_once 'additonal/functions.add.php';
require_once 'userheader.php';

if (isset($_SESSION["usersUid"])) {

 ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
    <link rel="stylesheet" href="profile.css">
  </head>
  <body class="body1">
    <div class="container">
		<div class="main-body">
			<div class="row">
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
								<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
								<div class="mt-3">
									<h4>
                    <?php
                      $uid=$_SESSION["usersUid"];
                     $profileName=uidExists($conn, $uid, $uid);
                     echo $profileName['profileName'];
                       ?></h4>
									<p class="text-secondary mb-1">
                    <?php
                  $uid=$_SESSION["usersUid"];
                 $about=uidExists($conn, $uid, $uid);
                 echo $about['about'];
                   ?></p>
								</div>
							</div>
            </div>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="card">
						<form class="card-body1" action="additonal/editprofile.add.php" method="post">
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Full Name</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" name="usersName" placeholder="Full Name..">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Profile Name</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" name="profileName" placeholder="Profile Name (Name shown under profile picture)..">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Mobile</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" name="mobile" placeholder="Mobile No..">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">About</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" name="about" placeholder="About (Text under profile picture)..">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Address</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" name="address" placeholder="Address..">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
									<button type="submit" class="btn btn-primary px-4" name="submit">Save Changes</button>
								</div>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>

  </body>
</html>
<?php } ?>
