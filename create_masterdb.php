<?php include("functions/functions.php"); ?>
<html>
    <head>
          <title>Create Master Database</title>
          <link rel="stylesheet" type="text/css" href="styles/style2.css" />
          <link rel="stylesheet" href="styles/form_style.css" />

          <script type="text/javascript">
			   function update(str)
			   {
			      var xmlhttp;
			      if (window.XMLHttpRequest)
			      {// code for IE7+, Firefox, Chrome, Opera, Safari
			        xmlhttp=new XMLHttpRequest();
			      }
			      else
			      {// code for IE6, IE5
			        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			      } 

			      xmlhttp.onreadystatechange = function() 
			      {
			        if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
			        {
			          document.getElementById("branch").innerHTML = xmlhttp.responseText;
			        }
			      }
			      xmlhttp.open("GET","get_branch.php?opt="+str, true);
			      xmlhttp.send();
			  }

			  function update1(str)
			   {
			      var xmlhttp;
			      if (window.XMLHttpRequest)
			      {// code for IE7+, Firefox, Chrome, Opera, Safari
			        xmlhttp=new XMLHttpRequest();
			      }
			      else
			      {// code for IE6, IE5
			        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			      } 

			      xmlhttp.onreadystatechange = function() 
			      {
			        if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
			        {
			          document.getElementById("fid").innerHTML = xmlhttp.responseText;
			        }
			      }
			      xmlhttp.open("GET","get_fid.php?opt="+str, true);
			      xmlhttp.send();
			  }

			  function update2(str)
			   {
			      var xmlhttp;
			      var course = document.getElementById("course").value;

			      if (window.XMLHttpRequest)
			      {// code for IE7+, Firefox, Chrome, Opera, Safari
			        xmlhttp=new XMLHttpRequest();
			      }
			      else
			      {// code for IE6, IE5
			        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			      } 

			      xmlhttp.onreadystatechange = function() 
			      {
			        if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
			        {
			          document.getElementById("sem").innerHTML = xmlhttp.responseText;
			        }
			      }
			      xmlhttp.open("GET","get_sem.php?opt="+str+"&cname="+course, true);
			      xmlhttp.send();
			  }
		  </script>

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
		
		<li style="margin-left:290px"><a href="admin.php">Home</a></li>
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
      <div id="content" style=" height:700px">

    	<form class="register" method="post">

    		   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    		   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Select Course<sup>*</sup> : &nbsp;&nbsp;
			   <select id="course" name="formcname" style="width: 25%;" onchange="update(this.value)">
			   <option>Select an Option</option>
			   <?php get_course(); ?>
			   </select> <br><br/>

			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Select Branch<sup>*</sup> : &nbsp;&nbsp;
			   <select id="branch" name="formbname" style="width: 25%;" onchange="update2(this.value)">
			   </select> <br><br/>

			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Select Semester<sup>*</sup> : 
			   <select id="sem" name="formsem" style="width: 25%;">
			   </select> <br><br/>

			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Select Day<sup>*</sup> :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   <select name="formday" style="width: 25%;">
							<option>Monday</option>
							<option>Tuesday</option>
			        		<option>Wednesday</option>
			        		<option>Thursday</option>
			        		<option>Friday</option>
			    </select> <br/><br/>

			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Start Time<sup>*</sup> : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   <select name="formstime" style="width: 25%;">
							<option>08</option>
							<option>09</option>
			        		<option>10</option>
			        		<option>11</option>
			        		<option>12</option>
			        		<option>14</option>
							<option>15</option>
			        		<option>16</option>
			        		<option>17</option>
			    </select> <br/><br/>

			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   End Time<sup>*</sup> : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   <select name="formetime" style="width: 25%;">
							<option>09</option>
			        		<option>10</option>
			        		<option>11</option>
			        		<option>12</option>
			        		<option>13</option>
							<option>15</option>
			        		<option>16</option>
			        		<option>17</option>
			        		<option>18</option>
			    </select> <br/><br/>

			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Subject Code<sup>*</sup> : &nbsp;&nbsp;
			   <select name="formscode" style="width: 25%;">
			   <?php get_subject(); ?>
			   </select> <br><br/>

			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Subject Type<sup>*</sup> : &nbsp;&nbsp;&nbsp;
			   <select name="formstype" style="width: 25%;">
							<option>Lecture</option>
							<option>Tutorial</option>
			        		<option>Practical</option>
			    </select> <br/><br/>


			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Group Name : <input type="text" name="formgname" style="margin-left: 24px; width: 25%;"> <br><br>

			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Subject Venue<sup>*</sup> : &nbsp;
			   <select name="formvname" style="width: 25%;">
			   <?php get_venue(); ?>
			   </select> <br><br/>

			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Faculty Name<sup>*</sup> : &nbsp;&nbsp;
			   <select name="formfname" style="width: 25%;" onchange="update1(this.value)">
			   <option>Select an Option</option>
			   <?php get_facultyname(); ?>
			   </select> <br><br/>

			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Faculty ID<sup>*</sup> : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   <select name="formfid1" style="width: 25%;" id="fid">
			   <option>Select an Option</option>
			   </select><br><br>

			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   Faculty ID :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   <input type="text" name="formfid2" style="width: 25%;"> <br><br>

			   <input type="submit" value="Add Lecture" name="add" class="register-button" style="margin-left: 160px">
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
//include("connection.php");

if( isset($_POST['add']) )
{

$cname = $_POST['formcname'];
$bname = $_POST['formbname'];
$sem = $_POST['formsem'];
$day = $_POST['formday'];
$stime = $_POST['formstime'];
$etime = $_POST['formetime'];
$scode = $_POST['formscode'];
$stype = $_POST['formstype'];
$gname = $_POST['formgname'];
$vname = $_POST['formvname'];
$fid1 = $_POST['formfid1'];
$fid2 = $_POST['formfid2'];

$query = "insert into mastertable values ('$cname','$bname','$sem','$day','$stime','$etime','$scode','$stype','$gname','$vname','$fid1','$fid2')";

if( !mysqli_query($conn,$query) )
{
  echo "<script>";
  echo "alert('Error during add Lecture.')";
  echo "</script>";
}
else
{
	echo "<script>";
	echo "alert('Lecture added successfully.')";
	echo "</script>";
}
}
?>