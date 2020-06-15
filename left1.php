<div align="justify"></div>
<div class="title_box">Special Product</div>
      <div class="border_box">
	   <?php
	 include("conn.php");
	 
	  $query=mysql_query("select * from itemmaster where itid = 65 ");
	 while($data=mysql_fetch_array($query))
	 {                                        
		 ?>
       <div class="product_title"><a href="detail.php?id=<?php echo $data['0'];?>"><?php echo $data['1']; ?></a></div>
          <div class="product_img"><a href="detail.php?id=<?php echo $data['0'];?>"><img src="<?php echo $data['new']; ?>" alt="" border="0" width="140" height="140" /></a></div>
          <div class="prod_price"> <span class="price"><?php echo "Start Bid at Rs.".$data['9']; ?></span></div>
      <?php 
	 }
	 ?> </div>
      
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