<!DOCTYPE html>
<html>
<link rel="icon" href="pics/logos.png">
	<head>
		<title>
			Signup
		</title>
	</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script src="jquery/jquery.js"></script>
<script src="js/bootstrap.js"></script>
	<body style="background-color: #2D3136; "  >

			<?php
        include('header.php');
        include('connection.php')
      ?>


<div class="container" style="margin-top: 60px; margin-bottom: 70px; color: white "  >
	<div class="card-card-1" style="background-color: #222222; height: 600px">
		<div class="container-fluid" >
		<h2 style="margin-top: 50px; text-align: center; font-family: sans-serif;">Sign Up</h2>
  <form action="signup1.php" style="margin-left: 380px" method="POST">
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Username"    style="background: transparent; width: 50%"name="username">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="pwd" placeholder="Enter Your Email" style="background: transparent; width: 50%"name="email"  >
      </div>
      <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="email" placeholder="Password"   style="background: transparent; width: 50%"name="password">
    </div>
    <div class="form-group">
      <label for="pwd">Confirm Password</label>
      <input type="password" class="form-control" id="pwd" placeholder="Retype Password"  style="background: transparent; width: 50%"name="retypepassword">
    </div>
    <div class="form-group">
    <select class="form-control" id="sel1"   style="width: 30% " name="usertype">
			    <option>Admin</option>
			    <option>Author</option>
			    <option>Reader</option>
			  </select>

    </div>
    

    <button type="submit" class="btn btn-default">Sign Up</button>
  </form>
	</div>

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
