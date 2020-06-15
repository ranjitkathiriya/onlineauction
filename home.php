<?php {
session_start();
	if ($_SESSION != null ){
	
			include('loginheader.php');
	}else{
		include('header.php');
	}
}?>
    <div class="left_content">
      <?php include("left.php")?>
    </div>
    <!-- end of left content -->
    <div class="center_content">
      <div class="center_title_bar">Home | Sky Auctions </div>
      <div class="prod_box">
	  
	  <?php

session_start();
if($_SESSION =='uname')
{

header('location:home.php');
}


if($_SESSION == null)
{

header('location:login.php');
}

echo "Welcome to Auction Home Page<br>";

echo "Hello Mr." .$_SESSION['uname'];


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome To Auction Homepage..</title>
</head>

<body>

<table align="right" >
<tr >
<td >
<a href="logout.php" >Logout</a>
</tr>
</table>

 </div>
    </div>
    <!-- end of center content -->
    <div class="right_content">
      <?php include("right.php")?>
    </div>
    <!-- end of right content -->
  </div>
  <!-- end of main content -->
<?php include("footer.php")?>
