<?php 
	$conn = mysqli_connect("localhost","root","","dbcivil");

	/*..................................getting teachers............................*/

	function get_fidof($fname)
	{

		global $conn;
		$get_teacher = "select fid from faculty where fname = '$fname' order by fid";
		$run_teacher = mysqli_query($conn ,$get_teacher);
		while($row_teacher=mysqli_fetch_array($run_teacher))
		{
			$teacher_name=$row_teacher['fid'];
			echo "<option>$teacher_name</option>";	
		} 
	}
	
	function get_facultyname()
	{

		global $conn;
		$get_teacher = "select DISTINCT fname from faculty order by fname";
		$run_teacher = mysqli_query($conn ,$get_teacher);
		while($row_teacher=mysqli_fetch_array($run_teacher))
		{
			$teacher_name=$row_teacher['fname'];
			echo "<option>$teacher_name</option>";	
		} 
	}

	/*.................................getting subjects ...........................*/

	function get_course()
	{
		global $conn;
		$get_sub = "select DISTINCT cname from course order by cname";
		$run_sub = mysqli_query($conn ,$get_sub);
		while($row_sub=mysqli_fetch_array($run_sub))
		{
			$sub_name=$row_sub['cname'];
			echo "<option>$sub_name</option>";	
		} 
	}

	/*.................................getting Branch ...........................*/

	function get_branch()
	{
		global $conn;
		$get_sub = "select DISTINCT bname from course order by bname";
		$run_sub = mysqli_query($conn ,$get_sub);
		while($row_sub=mysqli_fetch_array($run_sub))
		{
			$sub_name=$row_sub['bname'];
			echo "<option>$sub_name</option>";	
		} 
	}

	function get_branchof($cname)
	{
		echo "<option>Select an Option</option>";
		global $conn;
		$get_sub = "select DISTINCT bname from course where cname = '$cname' order by bname";
		$run_sub = mysqli_query($conn ,$get_sub);
		while($row_sub=mysqli_fetch_array($run_sub))
		{
			$sub_name=$row_sub['bname'];
			echo "<option>$sub_name</option>";	
		} 
	}

	/*.................................getting semester ...........................*/

	function get_semof($cname,$bname)
	{
		global $conn;
		$query = "select sem from course where cname='$cname' AND bname='$bname'";
		$run = mysqli_query($conn,$query);
		$result = mysqli_fetch_array($run);
		$totalsem = $result['sem'];

		$query = "select * from year";
		$run = mysqli_query($conn ,$query);
		while($result = mysqli_fetch_array($run))
		{

			$sem=$result['stype'];			
			if( $sem == "Odd" )
			{
				for ($i=1; $i <= $totalsem; $i+=2) 
				{ 
					echo "<option>$i</option>";
				}
			}
			else
			{
				for ($i=2; $i <= $totalsem; $i+=2) 
				{ 
					echo "<option>$i</option>";
				}
			}
		}

	}

	/*.................................getting semester ...........................*/

	function get_subject()
	{
		global $conn;
		$get_sub = "select scode from subject order by scode";
		$run_sub = mysqli_query($conn ,$get_sub);
		while($row_sub=mysqli_fetch_array($run_sub))
		{
			$sub_name=$row_sub['scode'];
			echo "<option>$sub_name</option>";	
		} 
	}

	/*.................................getting venue ...........................*/

	function get_venue()
	{
		global $conn;
		$get = "select vname from venue order by vname";
		$run = mysqli_query($conn ,$get);
		while($row=mysqli_fetch_array($run))
		{
			
			$v_name=$row['vname'];
			echo "<option>$v_name</option>";
			
		} 
	}

	/*.................................getting schedule...........................*/

	function get_schedule($run)
	{
		global $conn;
        while( $get=mysqli_fetch_array($run) )
        {
             $start_time = $get['stime'];
             $end_time   = $get['etime'];
             $cname      = $get['cname'];
             $bname      = $get['bname'];
             $sem        = $get['sem'];
             $day        = $get['day'];
             $scode      = $get['scode'];
             $stype      = $get['stype'];
             $vname      = $get['vname'];
             $column     = $end_time - $start_time;
             echo "<td colspan='3'>$scode.'</br>'.$vname</td>";
        }
	}
	 
	
?>
