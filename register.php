<html>
    <head>
          <title>Add User</title>
          <link rel="stylesheet" type="text/css" href="styles/style2.css" />
          <link rel="stylesheet" href="styles/form_style.css" />
    </head>

    <body>
        <div id="page">
          <div id="header">
            <div id="section">
              <div><a href="teacher.php"><img src="images/logo.png" alt="" height="100px" width="350px"/></a></div>
              <h1>
              <span>MNNIT ALLAHABAD 
              <h3 style="font-size:18px; text-align:center; color:white;">
              <i>ALUMNI MANAGEMENT SYSTEM</i>
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
    <!-- _______________________Start of content Area_____________________________-->
      <div id="content" style=" height:900px">

    	<form class="register" method="post">

    		   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   User ID<sup>*</sup>
			   <input type="text" name="formfid" class="register-input" required > <br>

			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   First Name<sup>*</sup> 
			   <input type="text" name="formfname" class="register-input" required > <br>

			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Last Name<sup>*</sup> 
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

	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Alumni or Student?<sup>*</sup>
			   <input type="text" name="formsan" class="register-input" required > <br>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Year Of Joining<sup>*</sup>
			   <input type="text" name="formsan2" class="register-input" required > <br>




			   <input type="submit" value="Add User" name="add" class="register-button" style="margin-left: 160px">
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
$san = $_POST['formsan'];
$san2 = $_POST['formsan2'];

$query = "insert into user values ('$fid','$fname','$nick','$mail','$contact','$pass','$squs','$sans','$san','$san2')";

if( !mysqli_query($conn,$query) )
{
  echo "<script>";
  echo "alert('Error during add user..')";
  echo "</script>";
}
else
{
	$pass = md5($pass);
	$role = "User";
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
	  echo "alert('User Added Successfully')";
	  echo "</script>";
	}
}

}

?>
