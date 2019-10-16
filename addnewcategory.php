<!DOCTYPE html>
<html>
<link rel="icon" href="pics/logos.png">
	<head>
		<title>
			Add New Category
		</title>
	</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script src="jquery/jquery.js"></script>
<script src="js/bootstrap.js"></script>
	<body style="background-color: #2D3136; "  >
		
		<?php
       		include('header.php');
      	?>


<div class="container" style="margin-top: 120px;  color: white"  >

<h1 style="margin-left:15px">New Category</h1>


  <form class="navbar-form navbar-left" role="search" action="addnewcategory1.php" method="POST">
          <!-- <div class="form-group" style="margin-left: 380px; margin-top: 50px;"> -->
          <label class="active" style="color: white">Title</label><br>
          <input type="text" class="form-control" placeholder="Enter your name" style="width: 190%; background: transparent;" name="title"> <br>
      
         

          <label class="active" style="color: white">Category</label><br>
          <input type="text"  class="form-control" placeholder="Category" style=" width: 190%;; background: transparent; " name="category"><br>	
        <label for="comment" class="active" style="color: white" >Description</label><br>
        <textarea class="form-control" rows="5" id="comment" style=" width: 190%;; background: transparent; " placeholder="Description" name="description"></textarea>

        <button type="submit" class="btn btn-default" style="margin-top: 10px" >Submit</button>             
          <!-- </div> -->

    </form>
</div>

<!-- <div class="footer" style="height: 50px;">
	<div class="footer1" style=" color: white; margin-top: 10px; padding: 18px; background-color: #272727; text-align: center;">
	 	&copy;Copyrights | MIAN HAMZA
	</div>	 
</div> -->
	<footer class="navbar navbar-inverse navbar-fixed-bottom" style="height:20px; border-color:unset; ">
  <p  style=" color: white;  text-align: center; margin-top:15px;  ">
    &copy;Copyrights | MIAN HAMZA
  </p>
  
</footer>		
	</body>
</html>
