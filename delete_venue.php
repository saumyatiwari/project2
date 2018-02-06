<?php include("functions/functions.php"); ?>
<html>
    <head>
          <title>Delete Venue</title>
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
      <div id="content" style=" height:480px">

    	<form class="register" method="post">

			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Select Venue Name<sup>*</sup> : &nbsp;&nbsp;
			   <select name="formvname" style="width: 45%;">
			   <option>Select an Option</option>
			   <?php get_venue(); ?>
			   </select>
			   
			   <br><br><br>
			   <input type="submit" value="Delete Venue" name="delete" class="register-button" style="margin-left: 160px">
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

if( isset($_POST['delete']) )
{

$vname = $_POST['formvname'];

	$query = "delete from venue where vname = '$vname' ";
	$run = mysqli_query($conn,$query);
	
	if($run)
	{
		echo "<script>";
		echo "alert('Venue successfully deleted')";
		echo "</script>";
	}
	else
	{
		echo "<script>";
		echo "alert('Venue NOT delete')";
		echo "</script>";
	}
}

?>