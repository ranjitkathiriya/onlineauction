<div align="justify"></div>
<div class="title_box">Categories</div>
      <ul class="left_menu">
	  <?php 
	  {
	  include('conn.php');
        $query = mysql_query("SELECT * FROM `category`") or die (mysql_error());
		while($row = mysql_fetch_array($query)){
				echo "<li class = 'even'><a href ='latest.php?id=".$row['catid']."'>".$row['catname']."</a></li>";						
			}
		echo "</ul>";
		}
		
		
		?>
   
      
      <div class="title_box">Newsletter</div>
      <div class="border_box">
        <form method="post">
		<link rel="stylesheet" href="css/default.css">
           <p>
             <input type="text1" name="uname" class="newsletter_input" required/>
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