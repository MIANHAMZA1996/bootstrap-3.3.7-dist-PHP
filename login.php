<!DOCTYPE html>
<html>
<link rel="icon" href="pics/logos.png">
	<head>
		<title>
			Login
		</title>
	</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<script src="jquery/jquery.js"></script>
<script src="js/bootstrap.js"></script>
	<body style="background-color: #2D3136; "  >
				 <?php
       include('header.php');
       include('connection.php');
      ?>
 <?php
            if (isset($_GET['msg'])&& $_GET['msg']=="edit") { 
                 echo(" <div class='alert alert-danger'>
                    <strong>Username and Password dosen't match</strong>
                </div>    
                            ");
  }
?>
<div class="container" style="margin-top: 150px; margin-bottom: 100px; background-color: #222222; height: 500px; width: 500px; color: white">
	<div class="container" >
  <h2 style="margin-top: 50px;  font-family: sans-serif;">LOG IN </h2>
  <form action="login1.php" method="POST">
    <div class="form-group">
      <label for="email">Username</label>
      <input type="text" class="form-control" id="email" placeholder="Enter your username" name="username" style="background: transparent; width: 30%">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter your password" name="password" style="background: transparent; width: 30%">
    </div>
    <button type="submit" class="btn btn-default">Login</button>
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
