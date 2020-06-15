<?php include('conn.php');
{
session_start();
	if ($_SESSION != null ){
	
			include('loginheader.php');
	}else{
		include('header.php');
	}
}?>
<style type="text/css">
<!--
.style3 {color: #0fa0dd}
-->
</style>
<div class="crumb_navigation"> Navigation: <a href="index.php">Home</a> &loz; <span class="current">Sign Up</span> </div>
    <div class="left_content">
      <?php include("left.php")?>
    </div>
    <!-- end of left content -->
    <div class="center_content" >
      <div class="center_title_bar">Registration For Your Sky Account </div>
      <div class="prod_box" >
	  <?php
if(isset($_POST['submit']))
{
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
				echo "<b><font color=\"green\">Registerd sucessfully.. </font></b>";
		

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
				$mail->Body    = '
  Thank You For Joining With Us.
				
  Your User name For Sky Account is '.$uname.' 
						 
  Your Password For Sky Account is '.$pass.' 
							
  Have A Nice Day!!!!!!! ';
				//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
				
				if(!$mail->send()) {
				   echo 'Message could not be sent.';
				   echo 'Mailer Error: ' . $mail->ErrorInfo;
				   exit;
				}
				else
				{
		
			echo "<b><font color=\"green\">Your Login Detail has been sent to your email and mobile.</font></b>";
			
			}
	
	$unamea = '7405444281';
	$passwd = '7277784';

	$msg ='
  Thank You For Joining With Us.
 Your User name For Sky Account is '.$uname.' 
Your Password For Sky Account is '.$pass.'';
	
	require_once('lib/Unirest.php');
	
	Unirest::verifyPeer(false);
	Unirest::timeout(120);
	
	$response = Unirest::get(
	  "https://site2sms.p.mashape.com/index.php?uid=".$unamea."&pwd=".$passwd."&phone=".$mno."&msg=".$msg,
	  array(
		"X-Mashape-Authorization" => "LvJUrdbP0N8pJEzYeLA9jFPG2ZcmloEC"
	  ),
	  null
	);
	
				
			
	}

	else
	{
		echo mysql_error();
		echo "Not Registerd sucessfully";
	}
}
}
?>
	<script type="text/javascript">
			$("document").ready(function(){
						
				//$("#state").hide();
					$("#stid").change(function(){
					//$("#state").show();
					$("#ctid").show();
					var id=$(this).val();
					//alert(id);
			
					
					$.ajax({
						url:"selectstate.php",
						type:"POST",
						data:{stid:id},
						success:function(result){
							$("#ctid").html(result);
							
						
						}						
					});
				});
			
			});	
	</script>
<script type="text/javascript" src="validate.js"></script>
<script>
		
	$("document").ready(function(){
	//$("#required").hide();
		
		$("#submit").click(function(){
		
			var name,addd,mno,uname,hear,pass,utype,gender,stid,ctid,term;
			name = test_name("#name","#msgname");
	        addd = test_add("#addd","#msgaddd");
			mno = test_no("#mno","#msgphone");
			uname = test_email("#uname","#msgmail");
			pass = test_match("#pass","#cpass","#msgpass","#msgcpass");
			stid = test_drop("#stid","#msgdropdown1");
			ctid = test_drop("#ctid","#msgdropdown2");
			hear = test_drop("#hear","#msgdropdown3");
			term = test_check("#term","#msgckb");
	
			
			if(name == true && mno == true && addd==true && uname == true
				&& hear == true && pass == true && term == true 
				&& stid == true && ctid == true )
			{
				return true;
				
			}
			else
			{
				return false;
			}
			
			
		});
	
	});
</script>
	  
        <form action=""  method="post" class="register">
           <link rel="stylesheet" type="text/css" href="css/regcss.css"/>
		   
          <fieldset class="row1">
          <legend><span class="style3">Account Details</span>                </legend>
          <p>
                    <label>Email *                    </label>
                    <input type="text" name="uname" class="long1" id="uname"/><span id='msgmail'></span>
                   
          </p>
                <p>
                    <label>Password*
                    </label>
                    <input type="password" name="pass" class="long1" id="pass"/><span id='msgpass'></span>
                    <label>Repeat Password*
                    </label>
                    <input type="password" name="cpass" class="long1" id="cpass"/><span id='msgcpass'></span>
                    
                </p>
				<p>
				<table width="818">
					<tr><td width="143"><div align="right">Account Type * </div></td>
					<td width="67"><input name="utype" type="radio" id="utype" value="buyer" checked="checked"/>
					<span id='msgradio'></span>
Buyer</td><td width="91">
<input name="utype" type="radio"id="utype" value="seller+" />
<span id='msgradio'></span>Seller+</td><td width="221"></td>
<td width="272"><label class="obinfo">* obligatory fields
          </label></td></tr></table></p>
          </fieldset>
            <fieldset class="row2">
                <legend><span class="style3">Personal Details</span>                </legend>
                <p>
                    <label>Name *
                    </label>
                    <input type="text" name="name" class="long" id="name"/><span id='msgname'></span>
                </p>
                <p>
                    <label>Phone *
                    </label>
                    <input type="text" name="mno" maxlength="10" id="mno"/><span id='msgphone'></span>
                </p>
                <p>
                    <label>Street *
                    </label>
                    <textarea type="text" name="addd" class="long" id="addd"/></textarea><span id='msgaddd'></span>
                </p>
                <p>
                    <label>State *                    </label>
                    <select name="stid" id="stid"/>
                      <option>--Select--</option>
                      <?php
	                   $query="select * from state";
		               $rs=mysql_query($query);
		               while($data=mysql_fetch_array($rs))
		               {
			            echo "<option value='$data[0]'>$data[1]</option>";
		               }		
		
		?>
                                                                                                                                            </select><span id='msgdropdown1'></span>
  </p>
				 <p>
                    <label>City *
                    </label>
                    <select id="ctid" name="ctid"/><option>--Select--</option></select><span id='msgdropdown2'></span>
                </p>
           
           
            </fieldset>
            <fieldset class="row3">
                <legend><span class="style3">Further Information</span>                </legend>
                <p>
                    <label>Gender *</label>
                    <input name="gender" type="radio" id="name" value="male" checked="checked"/>
                    <span id='msgname'></span>
                    <label class="gender">Male</label>
                    <input name="gender" type="radio" value="female" id="name"/><span id='msgname'></span>
                    <label class="gender">Female</label>
                </p>
               
           
            <p>
                    <label> 
                    Where did you hear about Sky</label>
                    <select name="hear" width="60" id="hear"/><span id='msgdropdown3'></span>
					<option>--Select--</option>
                      <option>Friend</option>
                      <option>Advertising</option>
                      <option>Other</option>
                                        </select><span id='msgdropdown3'></span>
            </p>
			<p>
                    <label>Country *                    </label>
					<input name="country" readonly value="India"/>
            </p>
          </fieldset>
            <fieldset class="row4">
                <legend><span class="style3">Terms and Mailing</span>                </legend>
                <p class="agreement">
                    <input type="checkbox" name="term" id="term"/>
                    <label>*  I accept the <a href="terms.php">Terms and Conditions</a></label><span id='msgckb'></span>
                </p>
                
            </fieldset>
            <div><button class="button" name="submit" id="submit">Register &raquo;</button></div>
        </form>
		
		
    </div>
    <!-- end of center content -->
    
   </div>
  </div>
  <!-- end of main content -->
<?php include("footer.php")?>






