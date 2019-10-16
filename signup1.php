<?php
	include('connection.php');
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$retypepassword=$_POST['retypepassword'];
	$usertype=$_POST['usertype'];
	print_r($q);
	$q="INSERT INTO 1signup(username,email,password,retypepassword,usertype)
		VALUES ('$username','$email','$password','$retypepassword','$usertype')";

	mysqli_query($conn,$q);
	header("location:login.php");


?>