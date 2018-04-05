<?php 
	include 'header.php';
?>
	<section class = "headeroption">
		<h2> Case Change </h2>
	</section>
	<section class = "maincontent">

	<?php

		$str = "i am learning PHP. cause i love php.";

		echo strtoupper($str)."<br/>";
		echo strtolower($str)."<br/>";
		echo ucfirst($str)."<br/>";
		echo ucwords($str)."<br/>";

	?>
<?php require 'footer.php'?>