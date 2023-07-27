<?php
include "config.php";
?>


<form action="" method="post" enctype="multipart/form-data">

	<input type="file" name="image"> <br>
	<button type="submit" name="submitBtn">submit</button>

</form>

<?php




include "config.php";

if (isset($_POST['submitBtn'])) {

	$file = $_FILES['image']['name'];
	$tmp_name = $_FILES['image']['tmp_name'];
	$target_dir = "C:/xampp/htdocs/day_1/imageUploading/images/";
	$target_file = $target_dir.basename($file);
	$db_image = "images/" .basename($file);

	echo ("succefully uploaded");
	header('location: displayimg.php');

}

?>