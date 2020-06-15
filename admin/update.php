<?php 
include("conn.php");
$id=$_GET['id'];

if(isset($_POST['submit']))
{
$password=$_POST['password'];
$query=mysql_query("update registration set pass='$password' where regid='$id' ");


if($query)
{
header("location:reguser.php");
}
else
{
echo "not";
}
}
 ?>

<form method="post">
<table>
<tr>
<td>Password</td>
<td><input type="text" name="password"></td>
</tr>
<tr>
<td><input type="submit" name="submit">
</td>
</tr>
</table>
</form>