
<?php
	include('connection.php');
	$id=$_POST['id'];
	$posttitle=$_POST['posttitle'];
	// $image=$_FILES['image']['name'];
	$category=$_POST['category'];
	$description=$_POST['description'];

	if(!empty($_FILES['image']['name']))
	{
		$image=$_FILES['image']['name'];
		$path='uploads/';
//destination
		$destination=$path.$image;
		move_uploaded_file($_FILES['image']['tmp_name'], $destination);
		$n="UPDATE 3posts SET posttitle='$posttitle',image='$image',category='$category',description='$description' where id='$id' ";
	}
	else
	{	
		$n="UPDATE 3posts SET posttitle='$posttitle',category='$category',description='$description' where id='$id' ";
	}
		mysqli_query($conn,$n);
		header("location:allpost.php?msg=edit");

?>