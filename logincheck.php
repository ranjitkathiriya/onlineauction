<?php
session_start();
include('conn.php');
if(isset($_POST['uname']) && isset($_POST['pass']))
{
	
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
	$query="select * from registration where uname='$uname' and pass='$pass'";
	
	$rs=mysql_query($query);
	
	$num=mysql_num_rows($rs);
	if($num >= 1)
	{
		$data=mysql_fetch_array($rs);
		if($data[8] == 0)
		{
		 $_SESSION['uname']=$uname;
			header("location:admin/");
		}
		else if($data[8] == 1)
		{
		$_SESSION['uname']=$uname;
		header("location:buyer/");
		}
		
		else if($data[8] == 2)
		{
		$_SESSION['uname']=$uname;
		header("location:seller/");
		}
	   
	}
	else
	{
		echo "<b><font color=\"red\">User Name and Password Not valid </font></b>";
	}
	
	

}
?>