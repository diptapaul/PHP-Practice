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
		<h2>Superglobals Variables</h2>
	</section>
	<section class = "maincontent">
	<?php
		// $GLOBALS
		$x = 10;
		$y = 5;

		function test() {
			$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
		}
		test();
		echo $z."<br/>";

		//----------------------------------------------------

		// $_SERVER

		// for finding the directory
		echo $_SERVER['PHP_SELF']."<br/>";

		// for finding the server name
		echo $_SERVER['SERVER_NAME']."<br/>";

		// for finding the script name
		echo $_SERVER['SCRIPT_NAME']."<br/>";

		// for finding the browser name
		echo $_SERVER['HTTP_USER_AGENT']."<br/>";

		// for finding the ip address of the server
		echo $_SERVER['SERVER_ADDR']."<br/>";

		//----------------------------------------------------


	?>
	</section>
	<section class = "footeroption">
		<h2>Practice Hard. Thank you :)</h2>
	</section>
</div>
</body>
</html>