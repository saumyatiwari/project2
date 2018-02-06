<?php
	include("connection.php");
	session_start();
?>	

<html>
    <head>
          <title>Welcome</title>
          <link rel="stylesheet" type="text/css" href="styles/style4.css" />
          <link rel="stylesheet" href="styles/form_style2.css" />
		  <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<style type="text/css">


 #root {
   background-color: #eee;
 }

  #left_side {
        float: left;
       margin: 0 auto;
        width: 32%;
        background-color: #ccc;
    }

    #center_s {
        margin: 0 auto;
        width: 32%;
        background-color: rgb(33, 47, 60);
    }

    #right_side {
        float: right;
              margin: 0 auto;
        width: 32%;
        background-color: #ccc;
    }

nav ul {
    list-style-type: none;
    padding: 0;
}
   
nav ul a {
    text-decoration: none;
}

article {
    margin-left: 170px;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden;
}
.slider {
  width: 100%;
  height: 500px;
  overflow-x: scroll;
}
.slide {
  float: left;
  width: 300px;
  height: 500px;
}
.holder {
  width: 300%;
}
#slide-0 {

   background-image: url(images/main1.jpg);
    background-size: 100% 80%;
    background-repeat: no-repeat;
}
#slide-1 {
   background-image: url(images/coll.jpg);
    background-size: 100% 80%;
    background-repeat: no-repeat;
}
#slide-2 {
 background-image: url(images/mit3.jpg);
    background-size: 100% 80%;
    background-repeat: no-repeat;  
}
#slide-3 {
 background-image: url(images/images.jpg);
    background-size: 100% 80%;
    background-repeat: no-repeat;  
}
#slide-4 {
 background-image: url(images/a1.jpg);
    background-size: 100% 80%;
    background-repeat: no-repeat;  
}
#slide-5 {
 background-image: url(images/a2.jpg);
    background-size: 100% 80%;
    background-repeat: no-repeat;  
}
</style>
</head>

    <body>
        <div id="page">
          <div id="header">
            <div id="section">
              <div><a href="home.php"><img src="images/logo2.png" alt="" height="92px" width="75px"/></a></div>
			  <p style="font-size:20px; float:left;  font-weight:bold; margin-left:20px; margin-top:25px; color:white;"> Motilal Nehru National Institute Of Technology Allahabad <br> </p> 		
			  
              <h1>
		      <span>ALUMNI MANAGEMENT SYSTEM
		      <h3 style="font-size:18px; text-align:center; font-family:Palatino, serif; font-style: italic; color:white; margin-top:5px;">
		      Connect with Alumni
		      </h3>
		      </span>
		      </h1> 
            </div>
         </div>

        <ul id="menu">
		
		<li><pre>welcome :<?php if(isset($_SESSION['id'])) echo $_SESSION['id']; ?></pre></li>
		
		<li style="margin-left:150px"><a href="admin.php">Home</a></li>
		<li><a href="#">Events</a>
			<ul>
								<li><a href="printevent/index.php">Show Events</a></li>	
                      <li><a href="adminupdate_event.php">Update Events</a></li>	

                      <li><a href="printevent/index.php">Print Events</a></li>	
                      <li><a href="admindelete_event.php">Delete Event</a></li>

			</ul>
		</li>
		<li><a href="#">Job Opportunities</a>
			<ul>
								<li><a href="printjob/index.php">Show Opportunities</a></li>
                      <li><a href="printjob/index.php">Print Opportunities</a></li>
                       <li><a href="admindelete_job.php">Delete Opportunities</a></li>	
	
			</ul>
		</li>
		<li><a href="#">Interview</a>
			<ul>
								<li><a href="printinterview/index.php">Show Experience</a></li>	
                                 <li><a href="admindelete_interv.php">Delete Experience</a></li>	
			</ul>
		</li>
		<li><a href="#">Achievements</a>
			<ul>
				                      
				<li><a href="printachievement/index.php">Show Achievements</a></li>	
                               <li><a href="admindelete_ach.php">Delete Achievement </a></li>	
                     
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
      
	  <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: http://www.jssor.com -->
    <script src="js/jssor.slider-23.0.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideoTransitions = [
              [{b:5500,d:3000,o:-1,r:240,e:{r:2}}],
              [{b:-1,d:1,o:-1,c:{x:51.0,t:-51.0}},{b:0,d:1000,o:1,c:{x:-51.0,t:51.0},e:{o:7,c:{x:7,t:7}}}],
              [{b:-1,d:1,o:-1,sX:9,sY:9},{b:1000,d:1000,o:1,sX:-9,sY:-9,e:{sX:2,sY:2}}],
              [{b:-1,d:1,o:-1,r:-180,sX:9,sY:9},{b:2000,d:1000,o:1,r:180,sX:-9,sY:-9,e:{r:2,sX:2,sY:2}}],
              [{b:-1,d:1,o:-1},{b:3000,d:2000,y:180,o:1,e:{y:16}}],
              [{b:-1,d:1,o:-1,r:-150},{b:7500,d:1600,o:1,r:150,e:{r:3}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:9100,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:10000,d:1600,x:-200,o:-1,e:{x:16}}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*responsive code end*/
        };
    </script>
    <style>
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('img/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 22 css */
        /*
        .jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
        */
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('img/a22.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
    </style>
    <div id="jssor_1" style="position:relative;margin-left:0px; width:1300px;height:420px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;">
            <div>
                <img data-u="image" src="images/slide1.jpg" />
                </div>   
            <div>
                <img data-u="image" src="images/slide2.jpg" />
            </div>
            <div>
                <img data-u="image" src="images/slide3.jpg" />
            </div>
            <a data-u="any" href="http://www.jssor.com" style="display:none">Full Width Slider</a>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->


	  
	 <!-- _______________________Lower Content Area_____________________________-->  
 
	  <div>
	  <div  style=" width:100%">
	  <div class="centered" style=" height:730px; margin-left:50px; margin-right:50px;" >

	

				
			
			<div class="register">

              
									<h3> <strong>RECONNECT WITH CAMPUS</strong> </h3>
									<p style="padding-right:50px;" >
										Here is your chance to get reconnected with campus, visit with old classmates and make new friends, while remembering your days ...
									</p>
														
									
            </div>
			
			
			<div class="register">

              
									<h3> <strong>GIVE BACK TO COLLEGE</strong> </h3>
									<p style="padding-right:50px;" >
										Here is your chance to get reconnected with campus, visit with old classmates and make new friends, while remembering your days ...
									</p>
														
									
            </div>
			
			<div class="register">

              
									<h3> <strong>NEWS</strong> </h3>
									<p style="padding-right:50px;" >
										View the latest news related to the institute.
									</p>
														
									
            </div>
			
			
			<div class="register">

              
									<h3> <strong>ABOUT MCA</strong> </h3>
									<p style="padding-right:50px;" >
										This program is offered by Department of Computer Science and Engineering.
                                        Admission to MCA programme of MNNIT are made on the basis of result of NIMCET (NIT MCA Common Entrance Test)
									</p>
														
									
            </div>
			
			
			
			
		</div>	
		</div>
	


    <!-- _______________________End of Content Area_____________________________-->
      <div id="footer">
        <div><div>
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

