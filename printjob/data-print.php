`<html>

<head>
		<title>How to Print your Data in Table</title>
		
		<style>
		
		
.container {
	width:75%;
	margin:auto;
}
		
.table {
    width: 100%;
    margin-bottom: 20px;
}	

.table-striped tbody > tr:nth-child(odd) > td,
.table-striped tbody > tr:nth-child(odd) > th {
    background-color: #f9f9f9;
}

@media print{
#print {
display:none;
}
}

#print {
	width: 90px;
    height: 30px;
    font-size: 18px;
    background: white;
    border-radius: 4px;
	margin-left:28px;
	cursor:hand;
}
		
		</style>
<script>
function printPage() {
    window.print();
}
</script>
		
</head>


<body>
	<div class = "container">
		<div id = "header">
		<br/>
<button type="submit" id="print" onclick="printPage()">Print</button>
			<p style = "margin-left:30px; margin-top:50px; font-size:14pt; font-weight:bold;">Data in the Table to Print&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <div align="right">
		<b style="color:blue;">Date Prepared:</b>
		<?php include('current-date.php'); ?>
        </div>			
		<br/>
<?php
					include ('database.php');
					$result = $database->prepare ("SELECT * FROM jobfair2 order by job_id");
?>
						<table class="table table-striped">
						  <thead>
								<tr>
						<th>Company Name</th>
						<th>Title</th>
						<th>Salary</th>
						<th>City</th>
						<th>Country</th>
						<th>Description</th>
						<th>Prerequesting</th>
						<th>Benefits</th>
						<th>Contact</th>
						<th>Start_date</th>
						<th>Experience</th>
								</tr>
						  </thead>   
						  <tbody>
<?php
					$result ->execute();
					for ($count=0; $row_member = $result ->fetch(); $count++){
					$id = $row_member['job_id'];
?>
							<tr>
								<td><?php echo $row_member['company']; ?></td>
						<td><?php echo $row_member['title']; ?></td>
							<td><?php echo $row_member['salary']; ?></td>
							<td><?php echo $row_member['country']; ?></td>
							<td><?php echo $row_member['description']; ?></td>
							<td><?php echo $row_member['prerequisting']; ?></td>
							<td><?php echo $row_member['benefits']; ?></td>
							<td><?php echo $row_member['contact']; ?></td>
							<td><?php echo $row_member['start_date']; ?></td>
							<td><?php echo $row_member['experience']; ?></td>

							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							
							<?php 
							}					
							?>
						  </tbody> 
					  </table> 

<br />
<br />

<b style="color:blue; font-size:15px;">
Prepared By: Mngmt.
</b>


			</div>
	
	
	
	

	</div>
</body>


</html>