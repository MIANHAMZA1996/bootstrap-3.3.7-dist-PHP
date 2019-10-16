<?php
	include('connection.php');
	$id=$_GET['id'];

	$q="DELETE FROM 1signup WHERE id='$id'";
	$res=mysqli_query($conn,$q);

	header("location:users.php");

?>