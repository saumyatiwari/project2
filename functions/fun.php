<?php 
	$conn = mysqli_connect("localhost","root","","mini2");

function get_job()
	{

		global $conn;
		$get_job = "select job_id from jobfair2";
		$run_job = mysqli_query($conn ,$get_job);
		while($row_job=mysqli_fetch_array($run_job))
		{
			$job_name=$row_job['job_id'];
			echo "<option>$job_name</option>";	
		} 
	}
function get_event()
	{

		global $conn;
		$get_even = "select eventid from event1";
		$run_event = mysqli_query($conn ,$get_even);
		while($row_event=mysqli_fetch_array($run_event))
		{
			$event_name=$row_event['eventid'];
			echo "<option>$event_name</option>";	
		} 
	}
	
	function get_achv()
	{

		global $conn;
		$get_achvi = "select achvid from uachievment";
		$run_achvi = mysqli_query($conn ,$get_achvi);
		while($row_achv=mysqli_fetch_array($run_achvi))
		{
			$ach_name=$row_achv['achvid'];
			echo "<option>$ach_name</option>";	
		} 
	}
	function get_intervi()
	{

		global $conn;
		$get_intervi = "select inid from intervi";
		$run_intervi = mysqli_query($conn ,$get_intervi);
		while($row_int=mysqli_fetch_array($run_intervi))
		{
			$int_name=$row_int['inid'];
			echo "<option>$int_name</option>";	
		} 
	}
	
	?>

