<div class="title_box">Sky Auctions</div>
      <ul class="left_menu">
        <li class="odd"><a href="mission.php">Mission & Objectives</a></li>
        
        <li class="even"><a href="orga.php">Organization</a></li>
        
        <li class="odd"><a href="terms.php">Terms and Conditions</a></li>
        <li class="even"><a href="dev.php">The Developer</a></li>

      </ul>
      
      <div class="title_box">Newsletter</div>
      <div class="border_box" >
         <form method="post">
           <p>
		   <link rel="stylesheet" href="css/default.css">
             <input type="email" name="uname" class="newsletter_input" required/>
             <input type="submit" name="submit2" class="button4" value="Join" />
          </p>
           <p>&nbsp; </p>
        </form>
		<?php
if(isset($_POST['submit2']))
{
require_once("conn.php");
$uname=$_POST['uname'];

     $sql="INSERT INTO newsletter(uname) VALUES('$uname')";
	
     if( mysql_query($sql))
	{
		echo "<b><font color=\"green\">Subscribed sucessfully.. </font></b>";
	}
	else
	{
		echo mysql_error();
		echo "Not Subscribed sucessfully";
	}
}

?></div>