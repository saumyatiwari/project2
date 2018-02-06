<?php 
	include("connection.php");
	session_start();
	global $id;
	$id = $_SESSION['id'];
	global $com,$title,$sal,$city,$coun,$des,$pre,$ben,$cont,$start,$exp;
	$sel = "select * from jobfair2 where job_id= '$id'";
	$exquery = mysqli_query($conn,$sel);
	$res = mysqli_fetch_array($exquery);
	$com = $res['company']; 
	$title = $res['title']; 
	$sal = $res['salary']; 
              $city =$res['city'];
        $coun = $res['country']; 
	$des = $res['description']; 
	$pre = $res['prerequisting']; 
              $ben =$res['benefits'];
      $cont = $res['contact']; 
              $start =$res['start_date'];
       $exp =$res['experience'];

?>

<html>
    <head>
          <title>Update Job</title>
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
                
	</ul>
      
    <!-- _______________________Start of content Area_____________________________-->
      <div id="content" style=" height:600px">


<h1 ><center>Update JOB</center></h1>
<form method="post">
<table class="register" border="1px"cellpadding="10px">
<tr><td>company:</td><td><input type="text" name="cmpname" value="<?php echo $com?>"required="required"></td></tr>
<tr><td>title:</td><td><input type="text" name="title" value="<?php echo $title?>" required="required"></td></tr>
<tr><td>salary:</td><td><input type="text" name="salary" value="<?php echo $sal?>" required="required"></td></tr>
<tr><td>city:</td><td><input type="text" name="city" value="<?php echo $city?>" required="required"></td></tr>
<tr><td>country:</td><td><input type="text" name="country" value="<?php echo $coun?>"required="required"></td></tr>
<tr><td>desription:</td><td><input type="text" name="descrp" value="<?php echo $des?>" value="<?php echo $pre?>"required="required"></td></tr>
<tr><td>prerequisting:</td><td><input type="text" name="prereq" value="<?php echo $pre?>" value="<?php echo $ename?>"required="required"></td></tr>
<tr><td>benifits:</td><td><input type="text" name="benifits" value="<?php echo $ben?>"required="required"></td></tr>
<tr><td>contact:</td><td><input type="text" name="cno"required="required" value="<?php echo $cont?>"></td></tr>
<tr><td>startdate:</td><td><input type="date" name="sdate" value="<?php echo $start?>"required="required"></td></tr>
<tr><td>experience:</td><td><input type="text" name="exp" value="<?php echo $exp?>"required="required"></td></tr>

</table>
<center><input type="submit" name="submit"></center>
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
	if(isset($_POST['submit']))
	{  
           $id = $_SESSION['id'];
        
        $cmpname = $_POST['cmpname'];
		$title = $_POST['title'];
		$salary = $_POST['salary'];
		$city= $_POST['city'];
		$country = $_POST['country'];
		$descrp =$_POST['descrp'];
        $prereq = $_POST['prereq'];
        $benifits= $_POST['benifits'];
        $cno = $_POST['cno'];
        $sdate = $_POST['sdate'];
        $exp=$_POST['exp'];     


		$query = mysqli_query($conn,"update jobfair2 set company = '$cmpname',title = '$title',salary = '$salary',city = '$city',country = '$country',description = '$descrp',prerequisting = '$prereq',benefits = '$benifits',contact = '$cno',start_date = '$sdate',experience = '$exp' where company = '$cmpname' ");
if($query)
		{
			echo "<script>alert('updated successfully')</script>";
		}
		else
		{
			echo "Error updating record:";
		}


}

mysqli_close($conn);
?>