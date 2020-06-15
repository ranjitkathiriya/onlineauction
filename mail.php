<?php
session_start();
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
$mail->FromName = 'satish';		//From Email Id Display Name
//$mail->addAddress('josh@example.net', 'Josh Adams');  // Add a recipient
$mail->addAddress('kachhadiyakishan9@gmail.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//$mail->addAttachment('');         // Add attachments
//$mail->addAttachment('','');    // Optional name
//$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'Your Code is '.$_SESSION['code'].' <b>in bold!</b>';
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}
else
{
	echo 'Message has been sent';
}
?> 