<?php 
	include 'header.php';
?>
	<section class = "headeroption">
		<h2> Explode and Implode Function </h2>
	</section>
	<section class = "maincontent">

	<?php

		// Explode Function convert string to an array
		$str = "I love php programming";
		$arr = explode(" ", $str);
		print_r($arr);
		echo "<br>";

		// Implode Function convert arry to a string
		$arr = array("I", "love", "php", "programming");
		$str = implode(" ", $arr);
		echo $str;
	?>
<?php require 'footer.php'?>