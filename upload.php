<?php 

include("db.php");

if (isset($_POST['upload'])) {
	// $name = $_FILES['file'];
	// echo "<pre>";
	// print_r($name);
	// exit();
	$file_name = $_FILES['file']['name'];
	$file_type = $_FILES['file']['type'];	
	$temp_name = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	
	$file_destination = "upload/".$file_name;

	if (move_uploaded_file($temp_name,$file_destination)) { 
	
	$q = "INSERT INTO upload (name) VALUES ('$file_name')";

	if(mysqli_query($conn,$q)) {

		$success = "Video uploaded successfully.";
	}
	else {
		
		$failed = "Something went wrong??";
	}
}
else {

	$msz = "Please select a video to upload..!";
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Upload Video</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<style type="text/css">
		body{
	width: 100%;
    height: 170%;
   background-attachment: fixed;
	background-image:url(black.jpg);
	background-size: cover;
   
    background-position: center;
    position: relative;
   
    
		}

		h2{
			color:white;
		}
	</style>
	<!-- <script src="assets/js/jquery.min.js"></script> -->
</head>
<body>

	<div class="container mt-3">
		
	<h2 style=" color: red;
    font-size: 30px !important;
    height: 10px;
    z-index: 2;
    position: absolute;
    text-transform: uppercase;
    font-family: 'Bebas Neue', cursive;
    left: 10px;">BingeTv</h2>
				<div class="col-lg-8 m-auto">
				<form action="upload.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<h2>Upload a Video:</h2>
						 <input type="file" name="file" class="form-control">
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php } ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php } ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php } ?>
					<input type="submit" name="upload" value="Upload" class="btn btn-success ml-3">
				</form>
				</div>
	</div>
</body>
</html>