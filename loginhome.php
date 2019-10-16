


<?php
  SESSION_start();
    if (!empty($_SESSION && $_SESSION['usertype']=='Reader')) 
    {
    ?>

<?php } 

  elseif (!empty($_SESSION && $_SESSION['usertype']=='Author')) 
    {
?>
<?php  
}
       elseif (!empty($_SESSION && $_SESSION['usertype']=='Admin')) 
   { ?>


<?php 
}
  else
  {
?>    
<div class="container" style="color: white; margin-bottom: 90px; ">
  
   <form class="form-inline" action="login1.php" method="POST">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter your username" name="email" style="background: transparent;">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter your password" name="pwd" style="background: transparent;">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
   </form> 
</div>
 <?php }
?>

