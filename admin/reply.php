<?php 
include("conn.php");
$uname=$_GET['uname'];
?>


<?php include("header.php")?>
   <div class="crumb_navigation"> Navigation: <a href="index.php">Home</a> &loz; <span class="current">Notifications</span> </div> <div class="left_content">
      <?php include("left.php")?>
    </div>
    <!-- end of left content -->
    <div class="center_content" >
      <div class="center_title_bar">Notification</div>
      <div class="prod_box">


<style type="text/css">
<!--
.style2 {color: #0fa0dd}
-->
</style>
<?php
if(isset($_POST['submit']))
{
require "PHPMailerAutoload.php";
$uname=$_POST['uname'];
$message=$_POST['message'];

$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  	// Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'satishgelanibca@gmail.com';                            // SMTP username
$mail->Password = '8866706513';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
$mail->Port = 587;						//Port Number

$mail->From = 'satishgelanibca@gmail.com';			//From Email Id
$mail->FromName = 'Sky Auctions';		//From Email Id Display Name
//$mail->addAddress('josh@example.net', 'Josh Adams');  // Add a recipient
$mail->addAddress($_POST['uname']);                // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//$mail->addAttachment('');         // Add attachments
//$mail->addAttachment('','');    // Optional name
//$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = $message;
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
}
?> 
<form   method="post" class="register" enctype="multipart/form-data">
<link rel="stylesheet" type="text/css" href="css/default.css"/>
		   
         
  <fieldset class="row2">
  <legend><span class="style2">Enter Message</span> </legend>
               <p>
                    <label>User Name*                    </label>
                   <input readonly name="uname" value="<?php echo "$uname"?>" class="long"/>
  </p></br></br>
   <p>
                    <label>Message*                    </label>
                   <textarea name="message" required></textarea>
  </p>
  
		 		
               </br><div><button class="button4" name="submit">Submit &raquo;</button></div>
  </fieldset>
            
            
</form>

 </div>
    </div >
    <!-- end of center content -->
  
  </div>
  <!-- end of main content -->
<?php include("footer.php")?>

