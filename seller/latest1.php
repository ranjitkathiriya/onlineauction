<?php {
session_start();
	if ($_SESSION != null ){
	
			include('loginheader.php');
	}else{
		include('header.php');
	}
}?>
    <div class="left_content">
      <?php include("left.php")?>
    </div>
	
	<link rel="stylesheet" type="text/css" href="css/default.css"/>
    <!-- end of left content -->
    <div class="center_content"><div class="center_content">
      <div class="center_title_bar">Products on Bid</div>
     <?php
	 include("conn.php");
	 $id = $_GET['id'];
	  $subid = $_GET['subid'];
	  $query=mysql_query("select * from itemmaster  WHERE catid = '$id' AND subid = '$subid'");
	  $num=mysql_num_rows($query);
	  //echo $num;die();
	  if($num>0)
	  {
	 while($data=mysql_fetch_array($query))
	 {                                        
		 ?>
      <div class="prod_box"></br>
        <div class="top_prod_box"></div>
        <div class="center_prod_box">
          <div class="product_title"><a href="detail.php?id=<?php echo $data['0'];?>"><?php echo $data['1']; ?></a></div>
          <div class="product_img"><a href="detail.php?id=<?php echo $data['0'];?>"><img src="<?php echo $data['10']; ?>" alt="" border="0" width="140" height="140" /></a></div>
          <div class="prod_price"> <span class="price"><?php echo "Start Bid at Rs.".$data['8']; ?></span></div>
        </div>
        <div class="bottom_prod_box"></div>
        <div class="prod_details_tab">  <a href="detail.php?id=<?php echo $data['0'];?>" class="prod_details">details</a> </div>
      </div>
      <?php 
	 }
	 }else 
	 
	 {
			echo "<div class='prod_box'>";
				echo "<div class='top_prod_box'></div>";
				echo "<div class='center_prod_box'>";
					echo "<div class='product_title'>There is no available product on this category</div>";
				echo "<div class='product_img'><img src='product/NoProduct.jpg' width='140' height='140' alt='' border='0' /></div>";
				echo "<div class='prod_price'></div>";
			echo "</div>";
			echo "<div class='bottom_prod_box'></div>";
			echo "<div class='prod_details_tab'><a href='' class='prod_details'>details</a> </div>";
			echo "</div>";
		}
	 ?>
</div>
 </div>
    <!-- end of center content -->
   
  </div>
  <!-- end of main content -->
<?php include("footer.php")?>