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
		<h2>Strings</h2>
	</section>
	<section class = "maincontent">
	<?php
		$st = "I love my parents";
		echo "String = ".$st;
		echo "<br/>";
		echo "The length of the String is ".strlen($st);
		echo "<br>";
		echo "The number of words in String is ".str_word_count($st);
		echo "<br>";
		echo "The reverse of String is = ".strrev($st);
		echo "<br>";
		echo "The position of love in String is ".strpos($st, "love");
		echo "<br>";
		echo "After replacing love to like the String is = ".str_replace("love", "like", $st);
		echo "<br>";
	?>
	</section>
	<section class = "footeroption">
		<h2>Practice Hard. Thank you :)</h2>
	</section>
</div>
</body>
</html>