<?php
include("conn.php");
$id=$_GET['id'];
$query=mysql_query("delete from newsletter where nid='$id'");
if($query)
{
header("location:news.php");
}
else
{
echo mysql_error();
}

 ?>


