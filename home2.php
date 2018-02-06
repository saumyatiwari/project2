<?php 
	include("connection.php");
	
   session_start();
?>
<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="styles/style3.css"/>
	</head>

	<body>
		<div id="page1">
		  <div id="header">
		    <div id="section">
		      <div><a href="home.php"><img src="images/logo2.png" alt="" height="92px" width="75px"/></a></div>
			  <p style="font-size:20px; float:left;  font-weight:bold; margin-left:20px; margin-top:25px; color:white;"> Motilal Nehru National Institute Of Technology Allahabad <br>  </p> 		
              
			  
			<h1>
		      <span>MCA ALUMNI MANAGEMENT SYSTEM
		      <h3 style="font-size:18px; text-align:center; font-family:Palatino, serif; font-style: italic; color:white; margin-top:5px;">
		      Connect with Alumni
		      </h3>
		      </span>
		      </h1> 
		    </div>
		  </div>
    <ul id="menu">
		<li style="margin-left:200px"><a href="home2.php">Home</a></li>
		<li style="margin-left:200px"><a href="register.php">Sign Up</a></li>
           <li style="margin-left:200px"><a href="home2.php">Show Alumni</a></li>
           <li style="margin-left:200px"><a href="home2.php">Show Events</a></li>


          
	    </ul>


		
	   <div id="content">

	    <div id="login">
		 
		  <form method="post">
		   <fieldset>
		   
		   
		   <p style="color:white; font-size:20px; font-weight:bold; text-align:center;">Login</p>
		    <p><input type="text" required value="Username" onBlur="if(this.value=='')this.value='Username'" name="formid" onFocus="if(this.value=='Username')this.value='' ">
			</p>
			<p><input type="password" required value="Password" onBlur="if(this.value=='')this.value='Password'" onFocus="if(this.value=='Password')this.value='' " name="formpass">
		    </p>
			<p style="color:white;"> Role :  <select name ="formrole">
							<option>Admin</option>
							<option>User</option>
					    </select>
			</p>
            <p><a href="#">Forgot Password?</a></p>
			
			<p><input type="submit" value="Login" name="login"></p>
			
			<p><a href="register.php">Click here for Register..!</a></p>
			</fieldset>
		  </form>
		</div> <!-- end login --> 
  		</div>

  		  <div id="footer">
		    <div>
			      <div id="connect"> 
			      <a href="#"><img src="images/icon-facebook.gif" alt="" /></a> 
			      <a href="#"><img src="images/icon-twitter.gif" alt="" /></a>
			      <a href="#"><img src="images/icon-youtube.gif" alt="" /></a>
			      </div>
			    <div class="section">
			        <ul>
			          <li><a href="home2.php">Home</a></li>
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
  
  if(isset($_POST['login']))
  {
       
      
      $id = $_POST['formid'];
      $pass = $_POST['formpass'];
      $role = $_POST['formrole'];
      $pass = md5($pass);
      $query = "select * from login where id ='$id' AND pass ='$pass' AND role = '$role'";

     if( mysqli_num_rows(mysqli_query($conn,$query)) )
     {
        if($role == "Admin")
        {
	    $_SESSION['id'] = $id;
            header("location:admin.php");
	    	
        }
        else
        {
	    $_SESSION['id'] = $id;	
            header("location:welcome3.php");
        }
     }
     else
     {
        echo "<script>";
        echo "alert('Invalid Username or Password')";
        echo "</script>";
     }
  }
?>
