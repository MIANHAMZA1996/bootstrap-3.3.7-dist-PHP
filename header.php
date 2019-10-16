b


<!-- for ADMIN -->

<?php
	SESSION_start();
		if (!empty($_SESSION && $_SESSION['usertype']=='Admin')) 
		{
		?>

 <nav class="navbar navbar-inverse navbar-fixed-top"  >
					 <div class="container-fluid">
<!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="bootstrap.php">
<!-- BlogSite -->
		      	<img src="pics/logos.png" style="width: 45px; height: 45px; margin-top: -12.5px; ">
		      </a>
		    </div>

<!-- Collect the nav links, forms, and other content for toggling -->



<!-- for Author -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"  >
		      <ul class="nav navbar-nav">
		        <li ><a href="bootstrap.php">Home<span class="sr-only"></span></a></li>
		        <li><a href="aboutus.php">About us</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact us <span class="caret"></span></a>
		          <ul class="dropdown-menu">
					<li><a href="contactus.php"><span class="glyphicon glyphicon-query"></span>  Contact us</a></li>
		            <li class="disabled"><a href="#"><span class="glyphicon glyphicon-earphone"></span>  +92 334 4331235</a></li>		          	
		            <li><a href="https://mail.google.com/mail/?tab=rm"><span class="glyphicon glyphicon-envelope"></span>  Email</a></li>
		            <!-- <li><a href="#"></a></li> -->
		          </ul>
		        </li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Post <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="allpost.php"><span class="glyphicon glyphicon-briefcase"></span>  All Post</a></li>		          	
		            <li><a href="addnewpost.php"><span class="glyphicon glyphicon-pencil"></span>   Add New Post</a></li>
		            <!-- <li><a href="#"></a></li> -->
		          </ul>
		        </li>
<!-- for admin onl -->
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Category <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="allcategory.php   "><span class="glyphicon glyphicon-briefcase"></span> All Category</a></li>
		            <li><a href="addnewcategory.php"><span class="glyphicon glyphicon-pencil"></span> Add New Category</a></li>
		            <!-- <li><a href="#">Quries</a></li> -->
		          </ul>
		        </li> 
		        <li><a href="users.php">Users</a></li>
		        <li><a href="quries.php">Quries</a></li>
		      </ul>
 <!-- for new user -->
		    <ul class="nav navbar-nav navbar-right">
			     <!--  <form class="navbar-form navbar-left">
			        <div class="form-group">
			          <input type="text" class="form-control"  placeholder="Search" >
			        	 <button type="button" class="btn btn-default">Search</button>
			        </div>
			      </form>	 -->
			       
				<li class="dropdown">
		          
<!-- For log in user   -->
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 
		          	<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
		          	<span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="profile.php">Profile</a></li>
		            <li><a href="logout.php">Logout</a></li>
		          </ul>
		        </li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->

		</nav>


<!-- For AUTHOR -->

		<?php }

		elseif (!empty($_SESSION && $_SESSION['usertype']=='Author')) 
			
			{
		?>


			 <nav class="navbar navbar-inverse navbar-fixed-top"  >
					 <div class="container-fluid">
<!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="bootstrap.php">
<!-- BlogSite -->
		      	<img src="pics/logos.png" style="width: 45px; height: 45px; margin-top: -12.5px; ">
		      </a>
		    </div>

<!-- Collect the nav links, forms, and other content for toggling -->



<!-- for Author -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"  >
		      <ul class="nav navbar-nav">
		        <li ><a href="bootstrap.php">Home<span class="sr-only"></span></a></li>
		        <li><a href="aboutus.php">About us</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact us <span class="caret"></span></a>
		          <ul class="dropdown-menu">
					<li><a href="contactus.php"><span class="glyphicon glyphicon-query"></span>  Contact us</a></li>
		            <li class="disabled"><a href="#"><span class="glyphicon glyphicon-earphone"></span>  +92 334 4331235</a></li>		          	
		            <li><a href="email.php"><span class="glyphicon glyphicon-envelope"></span>  Email</a></li>
		            <!-- <li><a href="#"></a></li> -->
		          </ul>
		        </li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Post <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="allpost.php"><span class="glyphicon glyphicon-briefcase"></span>  All Post</a></li>		          	
		            <li><a href="addnewpost.php"><span class="glyphicon glyphicon-pencil"></span>   Add New Post</a></li>
		            <!-- <li><a href="#"></a></li> -->
		          </ul>
		        </li>
<!-- for admin onl -->
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Category <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="allcategory.php   "><span class="glyphicon glyphicon-briefcase"></span> All Category</a></li>
		            <li><a href="addnewcategory.php"><span class="glyphicon glyphicon-pencil"></span> Add New Category</a></li>
		            <!-- <li><a href="#">Quries</a></li> -->
		          </ul>
		        </li> 
		      </ul>
 <!-- for new user -->
		    <ul class="nav navbar-nav navbar-right">
			     <!--  <form class="navbar-form navbar-left">
			        <div class="form-group">
			          <input type="text" class="form-control"  placeholder="Search" >
			        	 <button type="button" class="btn btn-default">Search</button>
			        </div>
			      </form>	 -->
			       
			        <li class="dropdown">
		          
<!-- For log in user   -->
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 
		          	<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
		          	<span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="profile.php">Profile</a></li>
		            <li><a href="logout.php">Logout</a></li>
		          </ul>
		        </li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->

		</nav>


<?php } 


	elseif(!empty($_SESSION && $_SESSION['usertype']=='Reader'))
	{

?>
	 <nav class="navbar navbar-inverse navbar-fixed-top"  >
					 <div class="container-fluid">
<!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="bootstrap.php">
<!-- BlogSite -->
		      	<img src="pics/logos.png" style="width: 45px; height: 45px; margin-top: -12.5px; ">
		      </a>
		    </div>

<!-- Collect the nav links, forms, and other content for toggling -->



<!-- for Author -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"  >
		      <ul class="nav navbar-nav">
		        <li ><a href="bootstrap.php">Home<span class="sr-only"></span></a></li>
		        <li><a href="aboutus.php">About us</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact us <span class="caret"></span></a>
		          <ul class="dropdown-menu">
					<li><a href="contactus.php"><span class="glyphicon glyphicon-query"></span>  Contact us</a></li>
		            <li class="disabled"><a href="#"><span class="glyphicon glyphicon-earphone"></span>  +92 334 4331235</a></li>		          	
		            <li><a href="email.php"><span class="glyphicon glyphicon-envelope"></span>  Email</a></li>
		            <!-- <li><a href="#"></a></li> -->
		          </ul>
		        </li>
		        
		      </ul>
 <!-- for new user -->
		    <ul class="nav navbar-nav navbar-right">
			     <!--  <form class="navbar-form navbar-left">
			        <div class="form-group">
			          <input type="text" class="form-control"  placeholder="Search" >
			        	 <button type="button" class="btn btn-default">Search</button>
			        </div>
			      </form>	 -->
			         <li class="dropdown">
		          
<!-- For log in user   -->
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 
		          	<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
		          	<span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="profile.php">Profile</a></li>
		            <li><a href="logout.php">Logout</a></li>
		          </ul>
		        </li>
			        
		          
<!-- For log in user   -->
		          
		          </ul>
		        
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->

		</nav>
<?php } 


	else  {?>
		<nav class="navbar navbar-inverse navbar-fixed-top"  >
					 <div class="container-fluid">
<!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="bootstrap.php">
<!-- BlogSite -->
		      	<img src="pics/logos.png" style="width: 45px; height: 45px; margin-top: -12.5px; ">
		      </a>
		    </div>

<!-- Collect the nav links, forms, and other content for toggling -->



<!-- for Author -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"  >
		      <ul class="nav navbar-nav">
		        <li ><a href="bootstrap.php">Home<span class="sr-only"></span></a></li>
		        <li><a href="aboutus.php">About us</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact us <span class="caret"></span></a>
		          <ul class="dropdown-menu">
					<li><a href="contactus.php"><span class="glyphicon glyphicon-query"></span>  Contact us</a></li>
		            <li class="disabled"><a href="#"><span class="glyphicon glyphicon-earphone"></span>  +92 334 4331235</a></li>		          	
		            <li><a href="email.php"><span class="glyphicon glyphicon-envelope"></span>  Email</a></li>
		            <!-- <li><a href="#"></a></li> -->
		          </ul>
		        </li>
		        
		      </ul>
 <!-- for new user -->
		    <ul class="nav navbar-nav navbar-right">
			     <!--  <form class="navbar-form navbar-left">
			        <div class="form-group">
			          <input type="text" class="form-control"  placeholder="Search" >
			        	 <button type="button" class="btn btn-default">Search</button>
			        </div>
			      </form>	 -->
			        <li><a href="login.php">Login</a></li>
			        <li><a href="signup.php">Signup</a></li>
			        
		          
<!-- For log in user   -->
		          
		          </ul>
		        
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->

		</nav>
<?php  	}
?>



