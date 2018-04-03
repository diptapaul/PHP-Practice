<?php include 'header.php'?>
	<section class = "headeroption">
		<h2> File/Image Upload </h2>
	</section>
	<section class = "maincontent">

	<form method = "post" action = "" enctype = "multipart/form-data">
		<input type = "file" name = "image">
		<input type = "submit" value = "Submit">
	</form>

	<?php
		
		if(isset($_FILES['image'])) {
			$filename = $_FILES['image']['name'];
			$filetmp = $_FILES['image']['tmp_name'];
			move_uploaded_file($filetmp, "Images/".$filename);
		}
		
	?>
<?php require 'footer.php'?>