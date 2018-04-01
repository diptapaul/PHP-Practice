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
		<h2>Show output using Echo and Print</h2>
	</section>
	<section class = "maincontent">
	<?php
		echo "I love Bangladesh."." I love my country very much";
		echo "<br/>";
		print("I born in Bangladesh")
	?>
	</section>
	<section class = "footeroption">
		<h2>Practice Hard. Thank you :)</h2>
	</section>
</div>
</body>
</html>