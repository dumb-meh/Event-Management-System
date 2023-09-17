<?php
require_once 'header.php';
if (isset($_GET["error"])) {
  if ($_GET["error"] == "none") {
    echo "<span style='padding-left: 850px !important;  color: white; font-size: 25px;'>Success! Message Sent</span>";

  }
}
?>
<html>
<head>
	<title>Contact us</title>
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>
<body>

    <section>

    </section>
	<div class="container2">
		<div class="contact-box">
			<div class="left">
                <img src="img/bg4.jpg" class="imgSize1">
            </div>
			<div class="right">
        <form class="" action="contactus.php" method="post">
          <h2 class="contact-h2">Contact Us</h2>
  				<input type="text" class="field" name="name" placeholder="Your Name">
  				<input type="text" class="field" name="email" placeholder="Your Email">
  				<input type="text" class="field" name="phone" placeholder="Phone">
  				<textarea placeholder="Message"  name="message" class="field"></textarea>
  				<button class="btn" type="submit" name="submit">Send</button>
        </form>

			</div>
		</div>
	</div>
</body>
</html>
