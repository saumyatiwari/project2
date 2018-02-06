<html>

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
					$result = $database->prepare ("SELECT * FROM event1 ");
?>
						<table class="table table-striped">
						  <thead>
								<tr>
									<th>Event Name</th>
									<th>Event Date</th>
									<th>Event Time</th>
							        <th>Event Description</th>
								</tr>
						  </thead>   
						  <tbody>
<?php
					$result ->execute();
					for ($count=0; $row_member = $result ->fetch(); $count++){
					$id = $row_member['eventid'];
?>
							<tr>
								<td style="text-align:center;"><?php echo $row_member['ename']; ?></td>
								<td style="text-align:center;"><?php echo $row_member['date']; ?></td>
								<td style="text-align:center;"><?php echo $row_member['etime']; ?></td>
								<td style="text-align:center;"><?php echo $row_member['des']; ?></td>
								
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