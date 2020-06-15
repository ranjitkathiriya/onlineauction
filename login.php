<?php {
session_start();
	if ($_SESSION != null ){
	
			include('loginheader.php');
	}else{
		include('header.php');
	}
}?>

    <link href="loginstyle.css" rel="stylesheet" type="text/css" />
	<div class="crumb_navigation"> Navigation: <a href="index.php">Home</a> &loz; <span class="current">Login</span> </div>
<div class="left_content">
      <?php include("left.php")?>
    </div>
    <!-- end of left content -->
    <div class="center_content">
      <div class="center_title_bar">Login Into Your Sky Account </div>
      <div class="prod_box">
	  
	  
<div class="container">
  <div class="login">

    <h1>Enter Your Login Detail</h1>
    <form method="post">
	<?php

include('conn.php');
if(isset($_POST['submit']))
{
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
		$_SESSION['utype']=$data['8'];
		$_SESSION['name']=$data['name'];
		 $_SESSION['uname']=$data['uname'];
		 $ip_add = $_SERVER['REMOTE_ADDR'];
		$browser = $_SERVER['HTTP_USER_AGENT'];
		$query_login_info = mysql_query("INSERT INTO adloginfo (ip,browser,date) VALUES ('$ip_add','$browser',NOW())") or die (mysql_error());
		header("location:index.php");
			
					
		}
		else if($data[8] == 1)
		{
		$_SESSION['utype']=$data['8'];
		$_SESSION['name']=$data['name'];
		$_SESSION['uname']=$uname;
		$ip_add = $_SERVER['REMOTE_ADDR'];
					$browser = $_SERVER['HTTP_USER_AGENT'];
					$query_login_info = mysql_query("INSERT INTO adloginfo (ip,browser,date) VALUES ('$ip_add','$browser',NOW())") or die (mysql_error());
		header("location:index.php");
			}
			
		
		else if($data[8] == 2)
		{
		$_SESSION['utype']=$data['8'];
		$_SESSION['name']=$data['name'];
		$_SESSION['uname']=$uname;
		$ip_add = $_SERVER['REMOTE_ADDR'];
					$browser = $_SERVER['HTTP_USER_AGENT'];
					$query_login_info = mysql_query("INSERT INTO adloginfo (ip,browser,date) VALUES ('$ip_add','$browser',NOW())") or die (mysql_error());
		header("location:index.php");
			
			
		}
	   
	}
	else
	{
		echo "<center><b><font color=\"red\">User Name and Password Not valid </font></b></center>";
	}
	
	

}
}
?>
	<link rel="stylesheet" type="text/css" href="loginstyle.css" />
      <p><input type="email" name="uname" value="" placeholder="Username or Email" required></p>
      <p><input type="password" name="pass" value="" placeholder="Password" required></p>
      <p class="remember_me">
        <label>
        
    <div>  <link rel="stylesheet" type="text/css" href="css/default.css"/>
	<button class="button2" name="submit">Login &raquo;</button></div></br>
	 <div class="login-help">
    <p>Forgot your password? <a href="forgot.php">Click here to reset it</a></p>
	<p>New User? <a href="reg.php" >Click here to register</a></p>
  </div></p>
	</form>
	  
  </div>

  </div>
</div>
    </div>
    <!-- end of center content -->
    
   
  </div>
  <!-- end of main content -->
<?php include("footer.php")?>

