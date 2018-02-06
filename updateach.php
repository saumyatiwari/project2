<?php 
	include("connection.php");
	session_start();
	global $id;
	$id = $_SESSION['id'];
	global $aname,$adesc,$afield;
	$sel = "select * from uachievment where achvid = '$id'";
	$exquery = mysqli_query($conn,$sel);
	$res = mysqli_fetch_array($exquery);
	$aname = $res['achvname']; 
	$adesc = $res['achvdesc']; 
	$afield = $res['achvfield']; 
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
		
		<li><pre>welcome :<?php if(isset($_SESSION['id'])) echo $_SESSION['id']; ?></pre></li>
		
		<li style="margin-left:150px"><a href="welcome3.php">Home</a></li>
		<li><a href="#">Events</a>
			<ul>
				<li><a href="add_event.php">Add Events</a></li>
				<li><a href="printevent/index.php">Show Events</a></li>	
                      <li><a href="update_event.php">Update Events</a></li>	

                      <li><a href="printevent/index.php">Print Events</a></li>	
                      <li><a href="delete_event.php">Delete Event</a></li>

			</ul>
		</li>
		<li><a href="#">Job Opportunities</a>
			<ul>
				<li><a href="add_job.php">Add Opportunities</a></li>
				<li><a href="printjob/index.php">Show Opportunities</a></li>
                      <li><a href="printjob/index.php">Print Opportunities</a></li>
                       <li><a href="delete_job1.php">Delete Opportunities</a></li>	
	
			</ul>
		</li>
		<li><a href="#">Interview</a>
			<ul>
				<li><a href="add_interview.php">Add Experience</a></li>
				<li><a href="printinterview/index.php">Show Experience</a></li>	
                                 <li><a href="delete_interview.php">Delete Experience</a></li>	
			</ul>
		</li>
		<li><a href="#">Achievements</a>
			<ul>
				<li><a href="add_achievements.php">Add Achievements</a></li>
                      <li><a href="updateach.php">Update Achievements</a></li>

				<li><a href="printachievement/index.php">Show Achievements</a></li>	
                               <li><a href="delete_achievement.php">Delete Achievement </a></li>	
                     
			</ul>
		</li>
					
		
		<li><a href="#">My Profile</a>
		</li>
           <li><a href="simpchat/index.php">Chat</a>
		</li>
           <li><a href="ainfo/main.php">Image Add</a>
              <ul>
				<li><a href="ainfo/show.php">Show Images</a></li>
               </ul>

		</li>

		<li><a href="logout.php">LogOut</a></li>
                
		</li>
					
		
		<li><a href="#">My Profile</a>
		</li>
		<li><a href="logout.php">LogOut</a>
		</li>
	</ul>
      
    <!-- _______________________Start of content Area_____________________________-->
      <div id="content" style=" height:480px">

    	<form class="register" method="post">

    		   
			  

	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   	   Achievement Name<sup>*</sup>
			   <input type="text" name="aname" value="<?php echo $aname?>" class="register-input" required > <br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



			   Achievement Description<sup>*</sup>
			   <input type="text" name="adesc" value="<?php echo $adesc ?>" class="register-input" required > <br>

	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Field of Achievement<sup>*</sup>
			   <input type="text" name="afield" value="<?php echo $afield ?>" class="register-input" required > <br>





			   <input type="submit" value="save" name="save" class="register-button" style="margin-left: 160px">
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
<table>
</body>
</html> 
<?php
	if(isset($_POST['save']))
	{
		$id = $_POST['aid'];
		$aname = $_POST['aname'];
		$adesc = $_POST['adesc'];
		$afield = $_POST['afield'];

		$query = mysqli_query($conn,"update uachievment set achvname = '$aname',achvdesc='$adesc',achvfield = '$afield' ");
		if($query)
		{
			echo "<script>alert('updated successfully')</script>";
		}
		else
		{
			echo "nhi hoga";
		}
	}
?>

      


