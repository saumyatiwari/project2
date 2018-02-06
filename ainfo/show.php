<?php
//show information
ini_set('display_errors',1);
error_reporting(E_ALL);
$conn = mysql_connect("localhost","root","");
if(!$conn)
{
echo mysql_error();
}
$db = mysql_select_db("imagestore",$conn);
if(!$db)
{
echo mysql_error();
}

$q = "SELECT * FROM animaldata";
$r = mysql_query("$q",$conn);
if($r)
{
while($row=mysql_fetch_array($r))
{
//header("Content-type: text/html");
echo "</br>";
echo $row['aname'];
echo "</br>";
echo $row['adetails'];
echo "</br>";

//$type = "Content-type: ".$row['aphototype'];
//header($type);
echo "<img src=image.php?ano=".$row['ano']." width=300 height=100/>";


}
}
else
{
echo mysql_error();
}
?>