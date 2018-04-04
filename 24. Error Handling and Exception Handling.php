<?php 
	include 'header.php';
?>
	<section class = "headeroption">
		<h2> Error Handling and Exception </h2>
	</section>
	<section class = "maincontent">

	<?php

		// it will override server error reporting setting
		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
		
		$pri = 44;

		if($pri == 44) {
			echo "Yes<br/>";
		}
		else {
			echo "No<br/>";
		}

		// Exception

		function divide($a, $b) {
			if($b == 0) {
				throw new Exception("$a can't be divided by zero.<br/>");
			}
			return $a/$b;
		}

		try{
			$c = divide(10, 0);
			echo "The result is $c<br/>";
		}

		catch(Exception $e){
			echo $e->getMessage();
		}

	?>
<?php require 'footer.php'?>