<!DOCTYPE html>
<html>
<head>
	<title>Learning PHP</title>
	<style type="text/css">
		body{
			font-family: verdana;
		}
		.phpcoding{
			width: 900px;
			margin: 0 auto;
			background: #ddd;
			min-height: 400px;
		}
		.headeroption, .footeroption{
			background: #444;
			color: #fff;
			text-align: center;
			padding: 20px;
		}
		.maincontent{
			min-height: 400px;
			padding: 20px;
		}
		.headeroption h2, .footeroption h2{
			margin: 0;
		}
	</style>
</head>
 
<body>
<div class = "phpcoding">
	<section class = "headeroption">
		<h2>Loops</h2>
	</section>
	<section class = "maincontent">
	<?php
		$a = 1;

		echo "While Loop<br/>";
		while ($a <= 3) {
			echo $a."<br/>";
			$a++;
		}

		$a = 1;
		echo "<br/>Do While Loop<br/>";
		do {
			echo $a."<br/>";
			$a++;
		} while ($a <= 3);

		echo "<br/>For Loop<br/>";
		for($a = 1; $a <= 3; $a++) {
			echo $a."<br/>";
		}

		echo "<br/>Foreach Loop<br/>";
		$a = array("Dipta", "Pias", "Ali");
		foreach ($a as $val) {
			echo $val."<br/>";
		}
	?>
	</section>
	<section class = "footeroption">
		<h2>Practice Hard. Thank you :)</h2>
	</section>
</div>
</body>
</html>