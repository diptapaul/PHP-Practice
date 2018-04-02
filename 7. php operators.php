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
		<h2>PHP Operators</h2>
	</section>
	<section class = "maincontent">
	<?php
		echo "There are many operators. Such as - <br> Arithmatic Operators, Assignment Operators, Comparison Operators, Increment/Decrement Operators, Logical Operators, String Operators, Array Operators.<br><br>";
		echo "The Arithmatic Operators are : +, -, *, /, %, ** .<br>";
		echo "The Assignment Operators are : =, +=, -=, *=, /= etc.<br>";
		echo "The Comparison Operators are : == (compare just value), === (compare value with data type), != or <>, !==, >, >=, <, <= .<br>";
		echo "The Increment/Decrement Operators are : ++, -- .<br>";
		echo "The Logical Operators are : && or and, || or or, xor.<br>";
		echo "The String Operators are : . (concatenate), .= (concatenate and assign) .<br>";
		echo "The Array Operators are : + (union), ==, ===, !=, !== .<br>";
	?>
	</section>
	<section class = "footeroption">
		<h2>Practice Hard. Thank you :)</h2>
	</section>
</div>
</body>
</html>