<?php 
	include 'header.php';
?>
	<section class = "headeroption">
		<h2> Require and Require_Once </h2>
	</section>
	<section class = "maincontent">

	<?php

		require 'new.php';

		// require_once will first check whether it is already used or not. if it is already used then it will not do anything.
		require_once 'new.php'

	?>
<?php require 'footer.php'?>