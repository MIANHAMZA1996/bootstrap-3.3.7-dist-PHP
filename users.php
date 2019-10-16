<?php
  include("connection.php");
  $q="SELECT * FROM 1signup";
  $res=mysqli_query($conn, $q);
  $row=mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html>
<link rel="icon" href="pics/logos.png">
	<head>
		<title>
			Users
		</title>
	</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script src="jquery/jquery.js"></script>
<script src="js/bootstrap.js"></script>
	<body style="background-color: #2D3136; "  >
					 <?php
       include('header.php');
       include('connection.php');
      ?>



<div class="container" style="margin-top: 70px; margin-bottom: 70px; color: white;"  >

<h1>Users</h1>
  <p>Contextual classes can be used to color table rows or table cells. The classes that can be used are: .active, .success, .info, .warning, and .danger.</p>
  <table class="table" style=" background-color: #2D3136;">
    <thead>
      <tr>
        <th>Sr no</th>
        <th>Username</th>
        <th>Email</th>
        <th>Type</th>
        <th>Action</th>
        
      </tr>
    </thead>
    <tbody>
    <?php while ($row=mysqli_fetch_array($res)) {; ?>
      <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['username'] ?></td>
        <td><?php echo $row['email'] ?></td> 
        <td><?php echo $row['usertype'] ?></td>
        <td> <a href="deleteusers.php?id=<?php echo $row['id'] ?>">  <button type="button" class="btn btn-default">Delete</button></a></td>        

      </tr> 
  <?php } ?>          
      
    </tbody>
  </table>

  
</div>

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
