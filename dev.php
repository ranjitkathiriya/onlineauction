<?php {
session_start();
	if ($_SESSION != null ){
	
			include('loginheader.php');
	}else{
		include('header.php');
	}
}?><div class="crumb_navigation"> Navigation: <a href="index.php">Home</a> &loz; <span class="current">About Us</span> </div>
    <div class="left_content">
      <?php include("leftabout.php")?>
    </div>
    <!-- end of left content -->
    <div class="center_content">
      <div class="center_title_bar">The Developer</div>
	  <br><br><br><br>
      
     
		<font size="2" > 
				
		<center><b>The Developer</b></center><br>
				 <br>
						<center> Satish J Gelani <br><br></center>
						<center> Jaydip L Donga<br><br></center>
						<center> Abhishek K Gediya <br></center>
						   <div class="product_img"><a><img src="images/g6_12.gif" alt="" border="0" /></a></div>
						    <div class="product_img"><a><img src="images/6_14.gif" alt="" border="0" /></a></div>
						</div>
						 <br><br>
				  
				 </font >
				
 
  
  </div>
    </div>
    <!-- end of center content -->
   
    <!-- end of right content -->
  </div><!-- end of main content -->
  <?php include("footer.php")?>