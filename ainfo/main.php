<html>
<title>Image Information </title>
<body>
<form enctype="multipart/form-data" action="storeinfo.php" method="POST">

<table border=0 align=center bgcolor=black width=100%>
<tr><td colspan=2><h2>&nbsp</h2></td></tr>
</table>


<table border=0 align=center bgcolor=grey>
<tr><td colspan=2><h2>Image Information</h2></td></tr>
<tr>
<td>Image Name</td><td><input type=text name="aname"></td>
</tr>
<tr>
<td>Image Description</td><td><input type=text name="adetails"></td>
</tr>
<tr>
<td>Image Photo</td><td><input type=file name="aphoto"></td>
</tr>
<tr>
<td><input type="submit" name="submit2" value="display"></td>
</tr>
<tr>
<td></td><td><input type=submit name="submit" value="Store Information"></td>
</tr>
</table>
</form>
</body>
</html>