<?php
mysql_connect("localhost","root","");
mysql_select_db("auctiondb");
?>
<?php
include('index.php');
?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
	
</head>

<body>
<form action="insertsub.php" method="post">
<table>
<tr>
<td>Select Country :</td>
<td><select name="catid">
<option>---select---</option>
<?php
$query=mysql_query("select * from category");
while($data=mysql_fetch_array($query))
	{
		echo "<option value='$data[0]'>$data[1]</option>";
		}

?>
</select></td>
</tr>

<tr>
<td>Enter Subcategory:</td>
<td><input type="text" name="subname" /></td>
</tr>

<tr>
<td></td>
<td><input type="submit" value="submit" /></td>
</tr>
</table>
</form>
</body>
</html>
