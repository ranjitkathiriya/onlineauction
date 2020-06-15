<?php 
if(isset($_POST['submit']) && $_POST['submit'] == "Send")
{
	$uname = '7405444281';
	$passwd = '7277784';
	$phone = $_POST['txtreceiver'];
	$msg = '
  Thank You For Joining With Us.
				
  Your User name For Sky Account is '.$uname.' 
						 
  Your Password For Sky Account is '.$pass.' 
							
  Have A Nice Day!!!!!!! ';
	
	require_once('../lib/Unirest.php');
	
	Unirest::verifyPeer(false);
	//Unirest::timeout(60);
	
	$response = Unirest::get(
	  "https://site2sms.p.mashape.com/index.php?uid=".$uname."&pwd=".$passwd."&phone=".$phone."&msg=".$msg,
	  array(
		"X-Mashape-Authorization" => "LvJUrdbP0N8pJEzYeLA9jFPG2ZcmloEC"
	  ),
	  null
	);
	echo "<pre>";
	var_dump($response);
	
}
?>
<form method="post" action="">
<table>
	<tr>
		<td>Username:- </td><td><input type="text" name="txtuser"/></td>
	</tr>
	<tr>
		<td>Password:- </td><td><input type="password" name="txtpass"/></td>
	</tr>
	<tr>
		<td>Receiver No.:- </td><td><input type="text" name="txtreceiver"/></td>
	</tr>
	<tr>
		<td>Message:- </td><td><textarea name="txtmsg"></textarea></td>
	</tr>
	<tr>
		<td><input type="submit" name="submit" value="Send"/></td><td><input type="reset" /></td>
	</tr>
	
</table>
