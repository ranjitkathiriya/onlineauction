<?php include("header.php")?>
    <div class="crumb_navigation"> Navigation: <a href="index.php">Home</a> &loz; <span class="current">Product</span> </div><div class="left_content">
      <?php include("left.php")?>
    </div>
    <!-- end of left content -->
    <div class="center_content">
      <div class="center_title_bar">Your Bid History</div>
     

     <?php
	 
	 include("conn.php");
     $uname=$_SESSION['uname'];
	$query1="select * from bidreport where bidder="."'$uname'";
			$result=mysql_query($query1);
			
	 while($data=mysql_fetch_array($result))
	 {                                        
			$query=mysql_query("select * from itemmaster where itid=".$data['itid']);
	 while($data1=mysql_fetch_array($query))
	 {                                        
		 ?>
      <div class="prod_box"></br>
        <div class="top_prod_box"></div>
        <div class="center_prod_box">
          <div class="product_title"><a href="detail.php?id=<?php echo $data['1'];?>"><?php echo $data1['1']; ?></a></div>
          <div class="product_img"><a href="detail.php?id=<?php echo $data['1'];?>"><img src="<?php echo  '../'.$data1['10']; ?>" alt="" border="0" width="140" height="140" /></a></div>
          <div class="prod_price"> <span class="price"><?php echo "Your Bid Price.".$data['bidamount']; ?></span></div>
        </div>
        <div class="bottom_prod_box"></div>
        <div class="prod_details_tab">  <a href="detail.php?id=<?php echo $data['1'];?>" class="prod_details">details</a> </div>
      </div>
      <?php 
	  }
	 }
	 ?>
</div>
    </div>
    
  </div>
  
<?php include("footer.php")?>


