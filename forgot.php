<?php {
session_start();
	if ($_SESSION != null ){
	
			include('loginheader.php');
	}else{
		include('header.php');
	}
}?>

<div class="crumb_navigation"> Navigation: <a href="index.php">Home</a>&nbsp;&loz; <a href="login.php">Login</a>&nbsp;&loz; <span class="current">Forgot Password</span> </div>
    <link href="loginstyle.css" rel="stylesheet" type="text/css" />
<div class="left_content">
      <?php include("left.php")?>
    </div>
    <!-- end of left content -->
    <div class="center_content">
      <div class="center_title_bar">Forgot Password </div>
      <div class="prod_box">
	  
	  
<div class="container">
  <div class="login">
  
    <h1>Enter Your Email Address</h1>
    <form method="post" action="">
	
	<link rel="stylesheet" type="text/css" href="loginstyle.css" />
	<?php
if(isset($_POST['submit']))
{

include('conn.php');
$query="select pass from registration where uname='".$_POST['uname']."'";
$rs=mysql_query($query);
$data=mysql_fetch_array($rs);
$num=mysql_num_rows($rs);

if( $num>=1)
	{
	$code= $data['pass'];	
	require "PHPMailerAutoload.php";
	
	$mail = new PHPMailer;
	
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  	// Specify main and backup server
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'satishgelanibca@gmail.com';                            // SMTP username
	$mail->Password = '8866706513';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
	$mail->Port = 587;						//Port Number
	
	$mail->From = 'satishgelanibca@gmail.com';			//From Email Id
	$mail->FromName = 'Sky Auctions ';		//From Email Id Display Name
	//$mail->addAddress('josh@example.net', 'Josh Adams');  // Add a recipient
	$mail->addAddress($_POST['uname']);               // Name is optional
	//$mail->addReplyTo('info@example.com', 'Information');
	//$mail->addCC('cc@example.com');
	//$mail->addBCC('bcc@example.com');
	
	$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
	//$mail->addAttachment('');         // Add attachments
	//$mail->addAttachment('','');    // Optional name
	//$mail->isHTML(true);                                  // Set email format to HTML
	
	$mail->Subject = 'Confirmation Mail';
	$mail->Body    = 'Your Password For Sky Account is '.$code.' ';
	//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	
	if(!$mail->send()) {
	   echo 'Message could not be sent.';
	   echo 'Mailer Error: ' . $mail->ErrorInfo;
	   exit;
	}
	else
	{
		echo 'Your Password has been sent to your email address.';
	}
	}
	else
	{
		echo "<font color=\"red\">Your Email Address is Not Register For Sky Auctions.</font>";
	}

}
?>
      <p><input type="email" name="uname" value="" placeholder="Email Address" required></p>
     <div>  <link rel="stylesheet" type="text/css" href="css/default.css"/>
       <center>
          <button name="submit" class="button1">Submit &raquo;</button></center></div>
	</p>
	</form>
  </div>

  </div>
</div>
    </div>
    <!-- end of center content -->
    
   
  </div>
  <!-- end of main content -->
<?php include("footer.php")?>

