<html>
    <head>
          <title>Add Subject</title>
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
		
		<li style="margin-left:200px"><a href="welcome.php">Home</a></li>
		<li><a href="#">Events</a>
			<ul>
				<li><a href="add_event.php">Add Events</a></li>
				<li><a href="delete_faculty.php">Show Events</a></li>	
                      <li><a href="delete_faculty.php">Print Events</a></li>	

			</ul>
		</li>
		<li><a href="#">Job Opportunities</a>
			<ul>
				<li><a href="add_jobopportunities.php">Add Opportunities</a></li>
				<li><a href="delete_course.html">Show Opportunities</a></li>
                      <li><a href="delete_course.html">Print Opportunities</a></li>	
	
			</ul>
		</li>
		<li><a href="#">Interview</a>
			<ul>
				<li><a href="add_interview.php">Add Experience</a></li>
				<li><a href="delete_subject.html">Show Experience</a></li>	
			</ul>
		</li>
		<li><a href="#">Achievements</a>
			<ul>
				<li><a href="add_achievements.php">Add Achievements</a></li>
				<li><a href="delete_venue.html">Show Achievements</a></li>	
                     
			</ul>
		</li>
					
		
		<li><a href="#">My Profile</a>
		</li>
		<li><a href="#">LogOut</a>
		</li>
</ul>
      
    <!-- _______________________Start of content Area_____________________________-->
      <div id="content" style=" height:480px">

    	<form class="register" method="post">

    		   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Job Code<sup>*</sup>
			   <input type="text" name="formscode" class="register-input" required > <br>

			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Job Name<sup>*</sup>
			   <input type="text" name="formsname" class="register-input" required > <br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Job Description<sup>*</sup>
			   <input type="text" name="formdes" class="register-input" required > <br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Deadline<sup>*</sup>
			   <input type="text" name="formsdead" class="register-input" required > <br>



			   <input type="submit" value="Add Job" name="add" class="register-button" style="margin-left: 160px">
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
include("connection.php");

if( isset($_POST['add']) )
{

$scode = $_POST['formscode'];
$sname = $_POST['formsname'];
$sdes = $_POST['formdes'];
$sdead = $_POST['formsdead'];


$query = "insert into job values ('$scode','$sname','$sdes','$sdead')";

if( !mysqli_query($conn,$query) )
{
  echo "<script>";
  echo "alert('Error during add Job.')";
  echo "</script>";
}
else
{
	echo "<script>";
	echo "alert('Job inserted successfully.')";
	echo "</script>";
}

}

?>
