<?php
	include('connection.php');
	$title=$_POST['title'];
	
	$category=$_POST['category'];
	$description=mysqli_real_escape_string($conn, $_POST['description']);
	
	$q="INSERT INTO 4category(title,category,description)
		VALUES ('$title','$category','$description')";

	mysqli_query($conn,$q);
	header("location:allcategory.php?msg=success");


?>