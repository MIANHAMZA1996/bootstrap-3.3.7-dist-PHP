<?php
  include ('connection.php');
  $id=$_GET['id'];
  $m="SELECT * FROM 3posts WHERE id='$id'";
  $res=mysqli_query($conn,$m);
  $row=mysqli_fetch_object($res);
  ?>
<!DOCTYPE html>
<html>
<link rel="icon" href="pics/logos.png">
  <head>
    <title>
      Add New Post
    </title>
  </head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script src="jquery/jquery.js"></script>
<script src="js/bootstrap.js"></script>
  <body style="background-color: #2D3136; "  >
      <?php
       include('header.php');
      ?>



<div class="container" style="margin-top: 70px;  color: white"  >

<h1 style="margin-left:15px">New Post</h1>


  <form class="navbar-form navbar-left" role="search" action="updatepost.php" method="POST" enctype="multipart/form-data" >
          <!-- <div class="form-group" style="margin-left: 380px; margin-top: 50px;"> -->
            <input type="hidden" name="id" value="<?php echo $row->id?>;">
          <label class="active" style="color: white">Post Title</label><br>
          <input type="text" class="form-control" placeholder="Enter your Posttitle" style="width: 190%; background: transparent;" 
          value="<?php echo $row->posttitle?>;" name="posttitle"> <br>
      
          <label class="active" style="color: white">Image</label><br>
          <input type="file" class="file" placeholder="email" style="width: 190%; height: 190% background: transparent;" name="image" >
            <img src="uploads/<?php echo $row->image ?>" style="height: 30px ;width: 60px">
           <br>
      
         
          <label class="active" style="color: white">Category</label><br>
            <select class="form-control" id="sel1"  style="width: 190%;background: transparent; " name="category" value="<?php echo $row->category?>;">
              <option value="BIKE">BIKE</option>
              <option value="SPORTS">SPORTS</option>
              <option value="FOOD">FOOD</option>
              <option value="TECHNOLOGY">TECHNOLOGY</option>
              <option value="NEPAL">NEPALI</option>
            </select>

        <label for="comment" class="active" style="color: white">Description</label><br>
        <textarea class="form-control" rows="5" id="comment" style=" width: 190%; background: transparent; " placeholder="Description" name="description"  
        ><?php echo $row->description?></textarea>

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
