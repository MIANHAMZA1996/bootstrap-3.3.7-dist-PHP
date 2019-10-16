<?php
	include('connection.php');
	$id=$_POST['id'];
	$title=$_POST['title'];
	$category=$_POST['category'];
	$description=$_POST['description'];

	$n="UPDATE 4category SET title='$title',category='$category',description='$description' where id='$id' ";
	mysqli_query($conn,$n);
	header("location:allcategory.php?msg=edit");

?>