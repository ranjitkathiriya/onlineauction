<?php
session_start();
include('conn.php');
//$name=$_GET['name'];

 
		$old=$_FILES['ufile']['tmp_name'];
	$new="../Product/".$_FILES['ufile']['name'];
    $newinsert="Product/".$_FILES['ufile']['name'];
		 
 
$itname=$_POST['itname'];
$subid=$_POST['subid'];
$descri=$_POST['descri'];
$name=$_SESSION['uname'];
$itadddate=$_POST['itadddate'];
$itlastdate=$_POST['itlastdate'];
$itprice=$_POST['itprice'];
$itbidprice=$_POST['itbidprice'];
$querycity="select regid from registration where uname='$name'";
		$cityresult=mysql_query($querycity);
			$citydata=mysql_fetch_array($cityresult);
			$regid=$citydata['0'];
	if(move_uploaded_file($old,$new))
	{	    
 $sql="INSERT INTO itemmaster(itid,itname,subid,descri,regid,itadddate,itlastdate,itprice,itbidprice,new) VALUES('itid','$itname', '$subid', '$descri', '$regid','$itadddate', '$itlastdate', '$itprice', '$itbidprice','$newinsert')";
	 
	
     if( mysql_query($sql))
	{
		echo "Successfully";
	
	}
	else
	{
	
		echo mysql_error();
		echo "Not Registerd sucessfully";
	}
    }
	
?>