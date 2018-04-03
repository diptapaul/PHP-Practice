<?php include 'header.php'?>
	<section class = "headeroption">
		<h2> File Handling </h2>
	</section>
	<section class = "maincontent">

	<?php
		
		// will show the file
		echo readfile('text.txt')."<br>";

		// file open
		$file = fopen("text.txt", "r");

		// file read
		echo fread($file, filesize("text.txt"));

		// for printing the first line
		echo fgets($file, filesize("text.txt"));

		// for printing the first character
		 echo fgetc($file);

		// for printing the file from beginning to ending
		while (!feof($file)) {
			echo fgets($file)."<br>";
			// fetc for per charater print
		}
		
		// file close
		fclose($file);

		// create file
		$file = fopen("new.txt", "w");
		fwrite($file, "i love programming. i dont like to go outside.");
		fclose($file);

	?>
<?php require 'footer.php'?>