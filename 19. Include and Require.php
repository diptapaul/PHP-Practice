<?php include 'header.php'?>
	<section class = "headeroption">
		<h2> Include and Require Functions </h2>
	</section>
	<section class = "maincontent">

	<?php
		
		date_default_timezone_set("Asia/Dhaka");
		echo "Today is ".date("l")."<br>";
		echo "Today's Date is ".date("d.m.Y")."<br>";
		echo "Time is ".date("h:i:sa");

	?>
<?php require 'footer.php'?>