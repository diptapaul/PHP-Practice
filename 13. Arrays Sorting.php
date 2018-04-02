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
		<h2>Arrays Sorting</h2>
	</section>
	<section class = "maincontent">
	<?php
		
		$arr = array(6, 4, 5, 3, 1, 2);
		echo "Before Sorting the array is <br>";
		foreach($arr as $val) {
			echo "$val ";
		}
		echo "<br/>";
		sort($arr);
		echo "After Sorting the array in ascending order <br>";
		foreach($arr as $val) {
			echo "$val ";
		}
		echo "<br/><br/>";

		$arr = array(6, 4, 5, 3, 1, 2);
		echo "Before Sorting the array is <br>";
		foreach($arr as $val) {
			echo "$val ";
		}
		echo "<br/>";
		rsort($arr);
		echo "After Sorting the array in descending order <br>";
		foreach($arr as $val) {
			echo "$val ";
		}
		echo "<br/><br/>";
		
		$arr = array("Apple" => "3kg", "Abc" => "1kg");
		echo "Before Sorting the array is <br>";
		foreach($arr as $key => $val) {
			echo "$key = $val<br/>";
		}
		echo "After Sorting the array in value wise ascending order<br/>";
		// value wise ascending order sort
		asort($arr);
		foreach($arr as $key => $val) {
			echo "$key = $val<br/>";
		}
		echo "<br>";
		$arr = array("Apple" => "3kg", "Abc" => "1kg");
		echo "Before Sorting the array is <br>";
		foreach($arr as $key => $val) {
			echo "$key = $val<br/>";
		}
		echo "After Sorting the array in value wise descending order<br/>";
		// value wise descending order sort
		arsort($arr);
		foreach($arr as $key => $val) {
			echo "$key = $val<br/>";
		}
		echo "<br/>";
		$arr = array("Apple" => "3kg", "Abc" => "1kg");
		echo "Before Sorting the array is <br>";
		foreach($arr as $key => $val) {
			echo "$key = $val<br/>";
		}
		echo "After Sorting the array in key wise ascending order<br/>";
		// key wise ascending order sort
		ksort($arr);
		foreach($arr as $key => $val) {
			echo "$key = $val<br/>";
		}
		echo "<br/>";
		$arr = array("Apple" => "3kg", "Abc" => "1kg");
		echo "Before Sorting the array is <br>";
		foreach($arr as $key => $val) {
			echo "$key = $val<br/>";
		}
		echo "After Sorting the array in key wise descending order<br/>";
		// key wise descending order sort
		krsort($arr);
		foreach($arr as $key => $val) {
			echo "$key = $val<br/>";
		}
	?>
	</section>
	<section class = "footeroption">
		<h2>Practice Hard. Thank you :)</h2>
	</section>
</div>
</body>
</html>