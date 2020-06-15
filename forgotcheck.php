<?php
//session_start();

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

?>