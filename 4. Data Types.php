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
		<h2>Data Types</h2>
	</section>
	<section class = "maincontent">
	<?php
		echo "The data types are given below - "."<br>"."String, Integer, Float, Boolean, Array, Object, Null, Resource";
		echo "<br><br>";
		$string = "I am Dipta Paul";
		$integer = 22;
		$float = 3.76;
		$boolean = true;
		$array = array("Dipta", "Pias", "Mamun");

		Class Student{
	
		}

		$object = new Student();

		$null = null;

		var_dump($string);
		echo "<br>";
		var_dump($integer);
		echo "<br>";
		var_dump($float);
		echo "<br>";
		var_dump($boolean);
		echo "<br>";
		var_dump($array);
		echo "<br>";
		var_dump($object);
		echo "<br>";
		var_dump($null);
		echo "<br>";

	?>
	</section>
	<section class = "footeroption">
		<h2>Practice Hard. Thank you :)</h2>
	</section>
</div>
</body>
</html>