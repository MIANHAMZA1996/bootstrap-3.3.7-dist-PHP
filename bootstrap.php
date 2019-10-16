<!DOCTYPE html>
<html>
<link rel="icon" href="pics/logos.png">
	<head>
		<title>
			BLOG SITE
		</title>
	</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script src="jquery/jquery.js"></script>
<script src="js/bootstrap.js"></script>
	<body style="background-color: #2D3136; "  >
	 
	 <?php
       include('header.php');
       include ('connection.php');
        $q="SELECT * FROM 3posts"; 
        $res=mysqli_query($conn,$q);
      ?>

      
<div class="container" style="margin-top: 70px; margin-bottom: 50px; "  >
       



  <?php 
        while ($row=mysqli_fetch_array($res)) 
          {?>

  <div class="col-sm-4 col-md-4"  >
    <div class="thumbnail" style="background-color: #272727;"  >
      

      <img src="uploads/<?php echo $row['image']?>" 
      style="height: 250px;width: 350px;">
      
      <div class="caption" >
        <h3 style="color: white; font-family: fantasy; " >
          <?php echo $row['posttitle']?>          
        </h3>
        <p style="color: white; font-family: fantasy; text-align: justify;">
          <?php echo $row['description'] ?>
        </p>
        <p><a href="#" class="btn btn-primary" role="button">Read More</a> <a href="editpost.php?id=<?php echo $row['id'] ?>" class="btn btn-default" role="button">edit</a></p>
      </div>
    
    </div>
  </div>
    <?php } ?>
</div>



<?php 
    include('loginhome.php');     
 ?>

<!-- <div class="footer " style="height: 50px;">
	<div class="footer1" style=" color: white; margin-top: 10px; padding: 18px; background-color: #272727; text-align: center;">
	 	&copy;Copyrights | MIAN HAMZA
	</div>	  -->




<footer class="navbar navbar-inverse navbar-fixed-bottom" style="height:20px; border-color:unset; ">
  <p  style=" color: white;  text-align: center; margin-top:15px;  ">
    &copy;Copyrights | MIAN HAMZA
  </p>
  
</footer>
			
	</body>
</html>
