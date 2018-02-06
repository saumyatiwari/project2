<?php
  include("db.php");  

	$id =$_REQUEST['BookID'];
	
	$q="DELETE FROM books WHERE BookID = '$id'"
	// sending query
	mysqli_query($conn,$q) or die(mysql_error());  	
	
	header("Location: index.php");
?>