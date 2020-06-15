<?php include("header.php")?>
     <div class="crumb_navigation"> Navigation: <a href="index.php">Home</a> &loz; <span class="current">Contact Us</span> </div><div class="left_content">
      <?php include("left.php")?>
    </div>
    <!-- end of left content -->
    <div class="center_content">
      <div class="center_title_bar">Contact Us</div>
      <div class="prod_box">
        
<style type="text/css">
<!--
.style2 {color: #0fa0dd}
-->
</style>
<body>

<form method="post" class="register">
           <link rel="stylesheet" type="text/css" href="css/default.css"/>
		   
         
  <fieldset class="row2">
   <?php

if(isset($_POST['submit']))
{
include("conn.php");
$name=$_POST['name'];
$uname=$_POST['uname'];
$mno=$_POST['mno'];
$detail=$_POST['detail'];
$sql="INSERT INTO contact(name,uname,mno,detail) VALUES('$name', '$uname', '$mno', '$detail')";
	
     if( mysql_query($sql))
	{
		echo "<b><font color=\"green\">Your Message Sent Successfully</font></b>";
	}
	else
	{
		echo mysql_error();
		echo "<b><font color=\"red\">Message Not sent successfully</font></b>";
	}
	}

?>
<?php

require_once'conn.php';
$name=$_SESSION['uname'];
$query1="select * from registration where uname="."'$name'";

$rs=mysql_query($query1);

while($data = mysql_fetch_array($rs))
{	
	?>
  <legend><span class="style2">Enter Your Detail</span> </legend>
  <p>&nbsp;</p>
				
  <p>
                  <label>Name *                    </label>
                  <input type="text" readonly value="<?php echo $data['name']?>" name="name" class="long" required/>
  </p>
                <p>
                    <label>Email *
                    </label>
                    <input type="email" readonly value="<?php echo $data['uname']?>" name="uname" class="long" required/>
                </p>
				 <p>
                    <label>Mobile *
                    </label>
                    <input type="text" readonly value="<?php echo $data['mno']?>" maxlength="10" name="mno" class="long" required/>
                </p>
  <p>
				<label>Detail *    </label>
                <textarea name="detail"  cols="31" rows="3" border="1" required></textarea>
  </p>
  <p>
                    <label></label>
  </p>
				<div><button name="submit" class="button2">Send &raquo;</button></div>
  <?php
  }
  ?></fieldset>
            
            
</form>
      </div>
    </div >
    <!-- end of center content -->
   
  </div>
  <!-- end of main content -->
<?php include("footer.php")?>

