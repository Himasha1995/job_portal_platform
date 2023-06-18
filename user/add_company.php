<?php
error_reporting(0);

$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "../uploads" . $filename;
  	$company=$_POST['company'];
	$email=$_POST['email'];
  	$address=$_POST['address'];

	$db = mysqli_connect("localhost", "root", "", "job_portals");

	// Get all the submitted data from the form
	$sql = "INSERT INTO add_company (filename,company_name,email,address) VALUES ('$filename','$company','$email','$address')";

	// Execute query
	mysqli_query($db, $sql);

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3>  uploaded successfully!</h3>";
	} else {
		echo "<h3> Failed to upload !</h3>";
	}
}
?>

<!DOCTYPE html>
<html>

<head>



	<title>add company</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	
</head>
<a class="btn btn-danger" href="show_company_details.php" role="button">Back</a><br>

<body>
	<div id="content">
    <h1>Add new Company </h1>
		<form style="width: 50%;margin: 20px auto;" method="POST" action="" enctype="multipart/form-data">
			<div class="form-group">
				<input class="form-control" type="file" name="uploadfile" value="" />
			</div>
      <div class="form-group">
				<input class="form-control" type="text" name="company" value="" placeholder="Company Name" />
			</div>
      <div class="form-group">
				<input class="form-control" type="text" name="email" value="" placeholder="Email" />
			</div>
      <div class="form-group">
				<input class="form-control" type="text" name="address" value="" placeholder="Address" />
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit" name="upload">Add Company</button>
			</div>
		</form>
	</div>
	
</body>

</html>
