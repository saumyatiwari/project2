<html>
    <head>
          <title>Add Faculty</title>
          <link rel="stylesheet" type="text/css" href="styles/style2.css" />
          <link rel="stylesheet" href="styles/form_style.css" />
    </head>

    <body>
        <div id="page">
          <div id="header">
            <div id="section">
              <div><a href="teacher.php"><img src="images/logo.png" alt="" height="100px" width="350px"/></a></div>
              <h1>
              <span>DEPARTMENT OF CIVIL ENGINEERING 
              <h3 style="font-size:18px; text-align:center; color:white;">
              <i>Schedule Information</i>
              </h3>
              </span>
              </h1> 
            </div>
         </div>

        <ul id="menu">
		
		<li style="margin-left:290px"><a href="index.html">Home</a></li>
		<li><a href="#">Faculty</a>
			<ul>
				<li><a href="add_faculty.php">Add Faculty</a></li>
				<li><a href="delete_faculty.php">Delete Faculty</a></li>	
			</ul>
		</li>
		<li><a href="#">Course</a>
			<ul>
				<li><a href="add_course.html">Add Course</a></li>
				<li><a href="delete_course.html">Delete Course</a></li>	
			</ul>
		</li>
		<li><a href="#">Subject</a>
			<ul>
				<li><a href="add_subject.html">Add Subject</a></li>
				<li><a href="delete_subject.html">Delete Subject</a></li>	
			</ul>
		</li>
		<li><a href="#">Venue</a>
			<ul>
				<li><a href="add_venue.html">Add Venue</a></li>
				<li><a href="delete_venue.html">Delete Venue</a></li>	
			</ul>
		</li>
		<li><a href="#">Master Database</a>
			<ul>
				<li><a href="#">Set Session</a></li>
				<li><a href="#">Create Master Database</a></li>
				<li><a href="#">Delete Master Database</a></li>
				<li><a href="#">Update Master Database</a></li>	
			</ul>
		</li>
		<li><a href="#">My Profile</a>
		</li>
		<li><a href="#">LogOut</a>
		</li>
	</ul>
      
    <!-- _______________________Start of content Area_____________________________-->
      <div id="content" style=" height:750px">

    	<form class="register" method="post">

    		   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Faculty ID<sup>*</sup>
			   <input type="text" name="formfid" class="register-input" required > <br>

			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Full Name<sup>*</sup> 
			   <input type="text" name="formfname" class="register-input" required > <br>

			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Nick Name<sup>*</sup> 
			   <input type="text" name="formnick" class="register-input" required > <br>

			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Mail ID<sup>*</sup> 
			   <input type="email" name="formmail" class="register-input" required > <br>

			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Contact Number<sup>*</sup> 
			   <input type="text" name="formcontact" class="register-input" required > <br>

			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Password<sup>*</sup>
			   <input type="Password" name="formpassword" class="register-input" required style="width:60%"> <br><br>

			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Security Question<sup>*</sup>
			   <select name="formsqus" style="width: 45%;">
							<option>What is your pet name?</option>
							<option>Name of your best friend</option>
							<option>What is your lucky number?</option>
			        		<option>Which was your first school?</option>
			        		<option>What’s your nickname at home?</option>
			        		<option>Name of your roommate in college</option>
			        		<option>The last 6 digits of your ID number</option>
			   </select> 
			   <br><br><br>

			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Security Answer<sup>*</sup>
			   <input type="text" name="formsans" class="register-input" required > <br>

			   <input type="submit" value="Add Faculty" name="add" class="register-button" style="margin-left: 160px">
		</form>
        
      </div>

    <!-- _______________________End of Content Area_____________________________-->
      <div id="footer">
        <div>
          <div id="connect"> <a href="#"><img src="images/icon-facebook.gif" alt="" /></a> <a href="#"><img src="images/icon-twitter.gif" alt="" /></a> <a href="#"><img src="images/icon-youtube.gif" alt="" /></a> 
          </div>
          <div class="section">
            <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="about.html">About Us</a></li>
              <li><a href="signup.html">Sign Up</a></li>
              <li><a href="btech.html">B.Tech</a></li>
              <li><a href="mtech.html">M.Tech</a></li>
              <li class="last"><a href="contact_us.html">Contact us</a></li>
            </ul>
            <p>Copyright &copy; <a href="mnnit.ac.in">MNNIT</a> - All Rights Reserved<br>
               Developed & Maintained By : Chandan ,Man Singh, Nidhi & Sanu (MCA Team)
            </p>
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

$fid = $_POST['formfid'];
$fname = $_POST['formfname'];
$nick = $_POST['formnick'];
$mail = $_POST['formmail'];
$contact = $_POST['formcontact'];
$pass = $_POST['formpassword'];
$squs = $_POST['formsqus'];
$sans = $_POST['formsans'];

$query = "insert into faculty values ('$fid','$fname','$nick','$mail','$contact','$pass','$squs','$sans')";

if( !mysqli_query($conn,$query) )
{
  echo "<script>";
  echo "alert('Error during add faculty.')";
  echo "</script>";
}
else
{
	$pass = md5($pass);
	$role = "Faculty";
	$query = "insert into login values ('$fid','$pass','$role')";

	if( !mysqli_query($conn,$query) )
	{
	  echo "<script>";
	  echo "alert('Error during add faculty.')";
	  echo "</script>";
	}
	else
	{
	  echo "<script>";
	  echo "alert('Fuculty Added Successfully')";
	  echo "</script>";
	}
}

}

?>