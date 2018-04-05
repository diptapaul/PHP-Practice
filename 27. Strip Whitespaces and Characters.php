<?php 
	include 'header.php';
?>
	<section class = "headeroption">
		<h2> Strip Whitespaces/Characters </h2>
	</section>
	<section class = "maincontent">

	<?php

		$str = "     hello world ... ... ..";
		echo trim($str)."<br/>";
		echo ltrim($str)."<br/>";
		echo rtrim($str)."<br/>";
		echo trim($str, " .")."<br/>";

	?>
<?php require 'footer.php'?>