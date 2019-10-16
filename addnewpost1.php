<?php
	include('connection.php');
	$posttitle=$_POST['posttitle'];
	$image=$_FILES['image']['name'];
	$category=$_POST['category'];
	$description=mysqli_real_escape_string($conn, $_POST['description']);

	$path='uploads/';
//destination
	$destination=$path.$image;

	move_uploaded_file($_FILES['image']['tmp_name'], $destination);


	$n="INSERT INTO 3posts(posttitle,image,category,description)
		values ('$posttitle','$image','$category','$description') ";

	mysqli_query($conn,$n);
	header("location:allpost.php?msg=success");




?>
