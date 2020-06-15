<?php
session_start();
require_once("conn.php");
$name=$_POST['name'];
$uname=$_POST['uname'];
$mno=$_POST['mno'];
$detail=$_POST['detail'];
$sql="INSERT INTO contact(name,uname,mno,detail) VALUES('$name', '$uname', '$mno', '$detail')";
	
     if( mysql_query($sql))
	{
		$_SESSION['msg']="Successfully";
		header('location:contact.php');
	}
	else
	{
		echo mysql_error();
		echo "Not sucessflly";
	}

?>