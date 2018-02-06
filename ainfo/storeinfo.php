<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
$conn = mysqli_connect("localhost","root","","imagestore");
error_reporting();

$aname = $_POST['aname'];
$adetails = $_POST['adetails'];
$aphoto = addslashes (file_get_contents($_FILES['aphoto']['tmp_name']));
$image = getimagesize($_FILES['aphoto']['tmp_name']);//to know about image type etc

$imgtype = $image['mime'];

$q ="INSERT INTO animaldata VALUES('','$aname','$adetails','$aphoto','$imgtype')";

$r = mysqli_query($conn,$q);
if($r)
{
echo "Information stored successfully";

}
if(isset($_POST["submit2"]))
{
  $a="select * from animaldata";
   $res=mysqli_query($conn,$a);
   echo "<table>";
   echo "<tr>";
   
   while($row=mysqli_fetch_array($res))
   {
   echo "<td>"; 
   echo '<img src="data:image/jpeg;base64,'.base64_encode($row['aphoto'] ).'" height="200" width="200"/>';
   echo "<br>";
   ?><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a> <?php
   echo "</td>";
   
   
   
   }
   echo "</tr>";
   
   echo "</table>";
  

}


?>