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

   <div class="crumb_navigation"> Navigation: <a href="index.php">Home</a> &loz; <span class="current">Search</span> </div> <div class="left_content">
      <?php include("left.php")?>
    </div>
    <!-- end of left content -->
    
	  <div class="center_content">
      <div class="center_title_bar">Products on Bid</div>
     <?php
	 include("conn.php");
	 $id=$_GET['id'];
	  $query=mysql_query("select * from itemmaster where itid = '$id' ");
	 while($data=mysql_fetch_array($query))
	 {                                        
		 ?>
      <div class="prod_box"></br>
        <div class="top_prod_box"></div>
        <div class="center_prod_box">
          <div class="product_title"><a href="detail.php?id=<?php echo $data['0'];?>"><?php echo $data['1']; ?></a></div>
          <div class="product_img"><a href="detail.php?id=<?php echo $data['0'];?>"><img src="<?php echo $data['new']; ?>" alt="" border="0" width="140" height="140" /></a></div>
          <div class="prod_price"> <span class="price"><?php echo "Start Bid at Rs.".$data['9']; ?></span></div>
        </div>
        <div class="bottom_prod_box"></div>
        <div class="prod_details_tab">  <a href="detail.php?id=<?php echo $data['0'];?>" class="prod_details">details</a> </div>
      </div>
      <?php 
	 }
	 ?>
</div>
</div>
    <!-- end of center content -->
    
   </div>
  </div>
  <!-- end of main content -->
<?php include("footer.php")?>



