
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
	<!---	<link rel="icon" href="../../favicon.ico">	-->

    <title>How to Print your Data in Table</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dist/css/sticky-footer-navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
     
    </nav>
	
    <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
		<h2>
			Print your Data in Table
		</h2>
			<form method="post" action="data-print.php" target="_new" class="form-inline">
			  <div class="form-group">
				<label for="Date_From">Click to Print</label>
			  <button type="submit" name="search" class="btn btn-primary">Print Data</button>
			  </div>
			</form>
			
			<br />
			
			<div class="table-responsive">
				<table class="table">
					<tr>
						      <th>Company Name</th>
									<th>Job Name</th>
		                            <th>Interview Description</th>
					</tr>
				<?php
					include ('database.php');
					$result = $database->prepare ("SELECT * FROM intervi ");
					$result ->execute();
					for ($count=0; $row_member = $result ->fetch(); $count++){
					$id = $row_member['company'];
				?>
					<tr>
						<td style="text-align:center;"><?php echo $row_member['company']; ?></td>
								<td style="text-align:center;"><?php echo $row_member['jname']; ?></td>
								
								<td style="text-align:center;"><?php echo $row_member['des']; ?></td>
					</tr>
					<?php	}	?>
				</table>
			</div>
      </div>
    </div>

    <footer class="footer">
      <div class="container">
       
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
