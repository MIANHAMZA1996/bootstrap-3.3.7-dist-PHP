<!DOCTYPE html>
<html>
<link rel="icon" href="pics/logos.png">
	<head>
		<title>
			Contact Us
		</title>
	</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script src="jquery/jquery.js"></script>
<script src="js/bootstrap.js"></script>
	<body style="background-color: #2D3136; "  >
				 <?php
       include('header.php');
      ?>
<!-- <div class="container"> -->



		<img src="pics/contact.jpg" style="width: 45%; height: 35%; margin-left: 27%; border-radius: 10px; margin-top: 70px"  >
	<div class="container" style="margin-bottom: 100px;">

		<div class="list-group" style="float: left; width: 40%; margin-top: 80px; margin-left: 60px ">
		  
		  <button type="button" class="list-group-item">
		  	 <span class="glyphicon glyphicon-map-marker"></span>
		  18 Victoria St, Aberdeen AB10 1XA, UK</button>
		  <button type="button" class="list-group-item">
		  <span class="glyphicon glyphicon-earphone"></span>
		  +92 334 4331235
		  </button>
		  <button type="button" class="list-group-item">
		  <span class="glyphicon glyphicon-phone-alt"></span>
		  +92 423 5880296
		  </button>
		  
		  <button type="button" class="list-group-item">
		  	<span class="glyphicon glyphicon-envelope"></span>
		  hamzashokat12@gmail.com</button>

		</div>

		<form action="contactus1.php" method="POST" class="navbar-form navbar-right" role="search" style="; margin-top: 50px; margin-right: 320px">
		  		<!-- <div class="form-group" style="margin-left: 380px; margin-top: 50px;"> -->
	  		  <label class="active" style="color: white">Name</label><br>
	  		  <input type="text" class="form-control" placeholder="Enter your name" style="width: 150%" name="name"> <br>
	  	
	  		  <label class="active" style="color: white">Contact No</label><br>
	  		  <input type="text" class="form-control" placeholder="Mobile Number" style="width: 150%" name="mobilenumber"> <br>
	  	
	  		  <label class="active" style="color: white">City</label><br>
			  <select class="form-control" id="sel1"  style="width: 150% " name="country">
			    <option>Lahore</option>
			    <option>Multan</option>
			    <option>Islamabad</option>
			    <option>Karachi</option>
			    <option>Faislabad</option>
			    <option>Gawadar</option>
			  </select>

			  <label for="comment" class="active" style="color: white">Comment:</label><br>
			  <textarea class="form-control" rows="5" id="comment" style=" width: 150% " name="subject"></textarea>

	  		<button type="submit" class="btn btn-default" style="margin-top: 10px" >Submit</button>	  		  		
		  		<!-- </div> -->

		</form>

	</div>
<!-- </div> -->


<!-- 
<div class="footer" style="height: 50px;">
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
