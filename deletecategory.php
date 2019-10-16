<?php
	include('connection.php');
	$id=$_GET['id'];

	$q="DELETE FROM 4category WHERE id='$id'";
	$res=mysqli_query($conn,$q);

	header("location:allcategory.php?msg=delete");

?>