<?php
session_start();
require_once("conn.php");
$name=$_POST['name'];
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$hear=$_POST['hear'];
$addd=$_POST['addd'];
$mno=$_POST['mno'];
$ctid=$_POST['ctid'];
$country=$_POST['country'];
$gender=$_POST['gender'];
if($_POST['utype'] == "buyer")
{
	$utype=1;	
}
else if($_POST['utype'] == "seller+")
{
	$utype=2;
}
$query="select uname from registration where uname='$uname'";
		$result=mysql_query($query);
		$num=mysql_num_rows($result);
		
		if($num>=1)
		{
			echo "<b><font color=\"red\">User Name Is Already Exist.. </font></b>";
		}
		else
{

     $sql="INSERT INTO registration(name,uname,pass,hear,addd,ctid,mno,utype,country,gender) VALUES('$name', '$uname', '$pass', '$hear','$addd','$ctid','$mno','$utype','$country','$gender')";
	
     if( mysql_query($sql))
	{
		$_SESSION['msg']="Successfully";
		header('location:login.php');
	}
	else
	{
		echo mysql_error();
		echo "Not Registerd sucessfully";
	}
}
?>