<?php
	include("connection.php");
      include("functions/fun.php");
	session_start();
	

?>

<html>
    <head>
          <title>Add Achievement</title>
          <link rel="stylesheet" type="text/css" href="styles/style2.css" />
          <link rel="stylesheet" href="styles/form_style.css" />
    </head>

    <body>
        <div id="page">
          <div id="header">
            <div id="section">
		      <div><a href="home.php"><img src="images/logo.png" alt="" height="100px" width="350px"/></a></div>
		      <h1>
		      <span>ALUMNI MANAGEMNET SYSTEM
		      <h3 style="font-size:18px; text-align:center; color:white;">
		      <i>Connect with alumni</i>
		      </h3>
		      </span>
		      </h1> 
		    </div>
         </div>

        <ul id="menu">
		
		<li style="margin-left:200px"><a href="welcome2.php">Home</a></li>
		<li><a href="#">Events</a>
			<ul>
				<li><a href="add_event.php">Add Events</a></li>
				<li><a href="printevent/index.php">Show Events</a></li>	
                      <li><a href="printevent/index.php">Print Events</a></li>	

			</ul>
		</li>
		<li><a href="#">Job Opportunities</a>
			<ul>
				<li><a href="add_job.php">Add Opportunities</a></li>
				<li><a href="printjob/index.php">Show Opportunities</a></li>
                      <li><a href="printjob/index.php">Print Opportunities</a></li>	
	
			</ul>
		</li>
		<li><a href="#">Interview</a>
			<ul>
				<li><a href="add_interview.php">Add Experience</a></li>
				<li><a href="printinterview/index.php">Show Experience</a></li>	
			</ul>
		</li>
		<li><a href="#">Achievements</a>
			<ul>
				<li><a href="add_achievements.php">Add Achievements</a></li>
				<li><a href="printachievement/index.php">Show Achievements</a></li>	
                     
			</ul>
		</li>
					
		
		<li><a href="#">My Profile</a>
		</li>
		<li><a href="logout.php">LogOut</a>
		</li>
	</ul>
      
    <!-- _______________________Start of content Area_____________________________-->
      <div id="content" style=" height:600px">


<h1 ><center>DELETE JOB</center></h1>
<form method="post">
<table class="register" border="1px"cellpadding="10px">
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			job id<sup>*</sup> : &nbsp;&nbsp;
			   <select name="job_name" style="width: 40%;" >
			   <option>Select an Option</option>
			   <?php get_job(); ?>
			   </select><br><br>

</table>
<center><input type="submit" name="delete" value="Delete"></center>
</form>
      </div>

    <!-- _______________________End of Content Area_____________________________-->
      <div id="footer">
        <div>
			      <div id="connect"> 
			      <a href="#"><img src="images/icon-facebook.gif" alt="" /></a> 
			      <a href="#"><img src="images/icon-twitter.gif" alt="" /></a>
			      <a href="#"><img src="images/icon-youtube.gif" alt="" /></a>
			      </div>
			    <div class="section">
			        <ul>
			          <li><a href="index.html">Home</a></li>
			          <li><a href="about.html">About Us</a></li>
			          <li><a href="register.php">Sign Up</a></li>
					          <li class="last"><a href="contact_us.html">Contact us</a></li>
			        </ul>
			        <p>Copyright &copy; <a href="mnnit.ac.in">MNNIT</a> - All Rights Reserved<br>
			           Developed & Maintained By : Saumya Sanu Priya Shashank and Shahnawaz</p>
			    </div>
		    </div>
  		  </div>
</div>

		</body>
</html>        


<?php

	if(isset($_POST['delete']))
	{
		$id = $_SESSION['id'];
		
		$query = "delete from jobfair2 where job_id = '$id'";
		$del = mysqli_query($conn,$query);
		if($del)
			echo"<script>alert('deleted successfully')</script>";
		else
			echo "error";
	}
			
?>