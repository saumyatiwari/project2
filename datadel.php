    	<table border="1">
	
			<?php
			include("connection.php");
			
				
			$r="SELECT * FROM achievement";
			$result=mysqli_query($conn,$r);
			
			while($test = mysqli_fetch_array($result,MYSQLI_BOTH))
			{
				$id = $test['achievement name'];	
				echo "<tr align='center'>";	
				echo"<td><font color='black'>" .$test['Achievement name']."</font></td>";
				echo"<td><font color='black'>" .$test['achidname']."</font></td>";
				echo"<td><font color='black'>". $test['Description']. "</font></td>";
				echo"<td><font color='black'>". $test['Field']. "</font></td>";
					
				echo"<td> <a href ='view.php?Achievement name=$id'>Edit</a>";
				echo"<td> <a href ='del.php?Achievement name=$id'><center>Delete</center></a>";
									
				echo "</tr>";
			}
			mysqli_close($conn);
			?>
</table>

</body>
</html>        
