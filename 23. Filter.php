<?php 
	include 'header.php';
?>
	<section class = "headeroption">
		<h2> Filter </h2>
	</section>
	<section class = "maincontent">

	<?php
		
		// it will remove the html tags.
		$str = "<h2>I am Dipta Paul.</h2>";
		$newstr = filter_var($str, FILTER_SANITIZE_STRING);
		echo $newstr."<br/>";

		// it will check whether it is int or not
		$int = 50.01;
		$valid = filter_var($int, FILTER_VALIDATE_INT);
		if($valid) {
			echo "it is an integer.<br/>";
		}
		else {
			echo "it is not an integer.<br/>";
		}

		// it will check whether the ip is real or not.
		$ip = "127.0.0.1";
		$valid = filter_var($ip, FILTER_VALIDATE_IP);
		if($valid) {
			echo "it is an ip.<br/>";
		}
		else {
			echo "it is not an ip.<br/>";
		}

		// it will check whether the email is valid or not
		$email = "diptapaul000@gmail.com";
		$valid = filter_var($email, FILTER_VALIDATE_EMAIL);
		if($valid) {
			echo "it is an valid email address.<br/>";
		}
		else {
			echo "it is not an valid email address.<br/>";
		}

		// it will check whether the url is valid or not
		$url = "http://www.helloworld.com";
		$valid = filter_var($url, FILTER_VALIDATE_URL);
		if($valid) {
			echo "it is an valid website url.<br/>";
		}
		else {
			echo "it is not an valid website url.<br/>";
		}

		// it will check whether a number is in the range or not
		$int = 200;
		$min = 100;
		$max = 200;
		$valid = filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range" => $min, "max_range" => $max)));
		if($valid) {
			echo "The number is in the range<br/>";
		}
		else {
			echo "The number is not in the range.<br/>";
		}

		// it will check whether a url is valid and contain query string
		$url = "http://www.example.com/index.html?q=123";
		$isvalid = filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED);
		if($isvalid) {
			echo "The url is valid and contain query string.<br/>";
		}
		else {
			echo "The url is not valid or not contain a query string.<br/>";
		}

	?>
<?php require 'footer.php'?>