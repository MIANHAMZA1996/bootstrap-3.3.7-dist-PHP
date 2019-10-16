<?php
	include('connection.php');
	$id=$_GET['id'];

	$q="DELETE FROM 3posts WHERE id='$id'";
	$res=mysqli_query($conn,$q);

	header("location:allpost.php?msg=delete");

?>