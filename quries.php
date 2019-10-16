<?php
  include('connection.php');
  $q="SELECT * FROM 2contactus";
  $res=mysqli_query($conn, $q);
  $row=mysqli_fetch_array($res);

?>
<!DOCTYPE html>
<html>
<link rel="icon" href="pics/logos.png">
	<head>
		<title>
			Quries
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

<div class="container" style="margin-top: 70px; margin-bottom: 70px; color: white;" >
<?php
  if (isset($_GET['msg'])&& $_GET['msg']=="delete") { 
       echo(" <div class='alert alert-danger'>
                    <strong> Deleted</strong>
                </div>");
  }
?>
<h1>Quries</h1>
  <p></p>
  <table class="table" style=" background-color: #2D3136;">
    <thead>
      <tr>
        <th>Sr no</th>
        <th>Name</th>
        <th>Contact No</th>
        <th>City</th>
        <th>Message</th>
        <th>Action</th>
        
      </tr>
    </thead>
    <tbody>
        <?php while ($row=mysqli_fetch_array($res)) {;?>
      <tr>
       <td class="rowpost"><?php echo $row['id'] ?></td>
        <td class="rowpost"><?php echo $row['name'] ?></td>
        <td class="rowpost"><?php echo $row['mobilenumber'] ?></td>
        <td class="rowpost"><?php echo $row['country'] ?></td>
        <td class="rowpost"><?php echo $row['subject'] ?></td>
        
         <td> <a href="deletequries.php?id=<?php echo $row['id'] ?>">  <button type="button" class="btn btn-default">Delete</button></a></td>        
       </tr>
      <?php } ?>



    </tbody>
  </table>

  
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
