<?php
include("conn.php");
$id=$_GET['id'];
$query=mysql_query("delete from registration where regid='$id'");
if($query)
{
header("location:reguser.php");
}
else
{
echo mysql_error();
}

 ?>


