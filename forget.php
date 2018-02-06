<?php
	include("connection.php");
	session_start();
	

?>
<html>
    <head>
          <title>Forget Password</title>
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
		
			<li style="margin-left:200px"><a href="home2.php">Home</a></li>
		<li style="margin-left:200px"><a href="register.php">Sign Up</a></li>
          <li style="margin-left:200px"><a href="contact.html">Contact Us</a></li>

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
                      <li><a href="updateach.php">Update Achievements</a></li>

				<li><a href="printachievement/index.php">Show Achievements</a></li>	
                     
			</ul>
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
   	   Login Name<sup>*</sup>
			   <input type="text" name="id" class="register-input" required > <br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                Security Question<sup>*</sup>
			   <select name="sques" style="width: 45%;">
							<option>What is your pet name?</option>
							<option>Name of your best friend</option>
							<option>What is your lucky number?</option>
			        		<option>Which was your first school?</option>
			        		<option>What’s your nickname at home?</option>
			        		<option>Name of your roommate in college</option>
			        		<option>The last 6 digits of your ID number</option>
			   </select>  <br><br><br>
			   

	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Sequrity Answer<sup>*</sup>
			   <input type="text" name="ans" class="register-input" required > <br>
			   
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   New Password<sup>*</sup>
			   <input type="text" name="pass1" class="register-input" required > <br>






			   <input type="submit"  name="pass" class="register-button" style="margin-left: 160px">
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

if( isset($_POST['pass']) )
{

$id = $_POST['id'];
$sques = $_POST['sques'];
$ans = $_POST['ans'];
$pass = $_POST['pass1'];


		$query = mysqli_query($conn,"update user set pass='$pass' where UserID = '$id' And sans = '$ans'");
		
		
		
		
		if(!$query)
		{
						echo "<script>alert('error')</script>";
		}
		else
		{
			echo "<script>alert('Password changed successfully')</script>";

		}


}

?>
