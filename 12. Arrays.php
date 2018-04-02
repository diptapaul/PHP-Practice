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
		<h2>Arrays</h2>
	</section>
	<section class = "maincontent">
	<?php
		
		//There are three types of array : Indexed Arrays, Associative Arrays, Multi-Dimensional Arrays.

		//  Indexed Array
		$arr = array(1, 2, 3, 4, 5);
		for($i = 0; $i<count($arr); $i++) {
			echo $arr[$i]."<br/>";
		}

		// Associative Array
		$arr = array("Dipta" => 22, "Pias" => 23, "Sourov" => 21);
		foreach ($arr as $key => $val) {
			echo $key." = ".$val."<br/>";
		}

		// Multidimensional Array
		$student = array(
			array("Dipta", 3.75, 2018),
			array("Pias", 3.50, 2019),
			array("Dip", 3.46, 2017)
		);

		for($row = 0; $row < count($student); $row++) {
			for($col = 0; $col < count($student[$row]); $col++) {
				echo $student[$row][$col]." ";
			}
			echo "<br/>";
		}
		echo "<ul>";
		foreach($student as $row) {
			foreach($row as $col) {
				echo "<li>";
				echo $col."    ";
				echo "</li>";
			}
			echo "<br/>";
		}
		echo "</ul>";

	?>
	</section>
	<section class = "footeroption">
		<h2>Practice Hard. Thank you :)</h2>
	</section>
</div>
</body>
</html>