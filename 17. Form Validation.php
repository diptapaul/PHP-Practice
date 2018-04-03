<?php
	$erremail = $errweb = "";
	$name = $email = $comment = $gender = $web = "";
		if($_SERVER['REQUEST_METHOD'] == "POST") {
			$name = valid($_POST['username']);
			$email = valid($_POST['email']);
			$comment = valid($_POST['comment']);
			$gender = valid($_POST['gender']);
			$web = valid($_POST['web']);

			if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
				$erremail = "Email is invalid";
			}
			if(!filter_var($_POST['web'], FILTER_VALIDATE_URL)) {
				$errweb = "Website is invalid";
			}
			else {
				echo "$name<br>";
				echo "$email<br>";
				echo "$web<br>";
				echo "$comment<br>";
				echo "$gender<br>";
			}
		}

		function valid($data){ 
			return htmlspecialchars(stripslashes(trim($data)));
		}
?>

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
		<h2> Form Validation </h2>
	</section>
	<section class = "maincontent">
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method = "post">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"><span style="color:red"><?php echo $erremail?></span></td>
			</tr>
			<tr>
				<td>Website</td>
				<td><input type="text" name="web"><span style="color:red"><?php echo $errweb?></span></td>
			</tr>
			<tr>
				<td>Comment</td>
				<td><textarea name = "comment" rows = "5" cols = "40"></textarea></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" name="gender" value = "male">Male
					<input type="radio" name="gender" value="female">Female
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Submit" =""></td>
			</tr>
		</table>
	</form>

	</section>
	<section class = "footeroption">
		<h2>Practice Hard. Thank you :)</h2>
	</section>
</div>
</body>
</html>