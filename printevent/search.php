
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

    <title>How to Use Two Dates in Search</title>

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
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Alumni Management</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
         
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	
    <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
		<h2>
			Result(s) . . . . .
		</h2>
			<form method="post" action="search.php"  class="form-inline">
			  <div class="form-group">
				<label for="Date_From">Date From</label>
				<input type="date" name="date_from" value="<?php echo (isset ($_POST['start_date'])) ? $_POST['start_date']: ''; ?>" class="form-control" />
			  </div>
			  <button type="submit" name="search" class="btn btn-primary">Search</button>
			</form>
			
			<br />
			  <a href="index.php" style="text-decoration:none;">
			  <button type="submit" class="btn btn-warning">Back</button>
			  </a>
			<br />
			<br />
			
			<div class="table-responsive">
				<table class="table">
					<tr>
						<th>Member Name</th>
						<th>Contact</th>
						<th>Date Added</th>
					</tr>
				<?php
					include ('database.php');
					$result = $database->prepare ("SELECT * FROM event1 where (tbl_member.tbl_member_added BETWEEN '".$_POST['date_from']." 00:00:01' and '".$_POST['date_from']." 23:59:59') order by tbl_member_id DESC");
					$result ->execute();
					for ($count=0; $row_member = $result ->fetch(); $count++){
					$id = $row_member['tbl_member_id'];
				?>
					<tr>
						<td><?php echo $row_member['tbl_member_name']; ?></td>
						<td><?php echo $row_member['tbl_member_contact']; ?></td>
						<td><?php echo date("M d, Y h:i:s A", strtotime ($row_member['tbl_member_added'])); ?></td>
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
