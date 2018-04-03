<?php 
	session_start();
	include 'header.php';

	// for deleting cookie
	//setcookie('visit', "", time()-3600);
?>
	<section class = "headeroption">
		<h2> Session and Cookie </h2>
	</section>
	<section class = "maincontent">

	<?php
		
		// Session

		$_SESSION['username'] = "Dipta Paul";
		$_SESSION['pass'] = "Bristi";

		echo $_SESSION['username']."<br/>";
		session_unset();
		// it causes error.
		// echo $_SESSION['pass'];
		session_destroy();


		// Cookie

		if(!isset($_COOKIE['visit'])) {
			setcookie('visit', "1", time()+20, "/");
			echo "This is your first visit.";
		}
		else {
			echo "You are our old visitor.";
		}
		
	?>
<?php require 'footer.php'?>