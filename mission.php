<?php {
session_start();
	if ($_SESSION != null ){
	
			include('loginheader.php');
	}else{
		include('header.php');
	}
}?>
<div class="crumb_navigation"> Navigation: <a href="index.php">Home</a> &loz; <span class="current">About Us</span> </div>
    <div class="left_content">
      <?php include("leftabout.php")?>
    </div>
    <!-- end of left content -->
    <div class="center_content">
      <div class="center_title_bar">Mission & Objectives</div>
	  <br><br><br><br>
      
     <link rel="stylesheet" type="text/css" href="css/default.css"/>
				
		 <font size="2"> 
				
		<center><b><li>Our Mission</li></b></center><br>
				 <br><span> &nbsp;&nbsp;&nbsp;&nbsp;--> Sky Auctions purpose is to give and provide excelled services, creating an appropriate online auction &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;webpage that promotes different kinds of products. It declares the company’s purpose and serves as the &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;standard against in which the business weighs its actions and decisions. </span><br><br>
				  
				  
				  <center><b><li>Objectives</li></b></center><br>
				 <br><span> &nbsp;&nbsp;&nbsp;&nbsp;--> To provide fast and easy online bidding transactions to customers with a user friendly online system.<br>
				  &nbsp;&nbsp;&nbsp;&nbsp;--> To provide the company a faster way to advertise and to communicate with its customer with regards of &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bidding transactions and product.<br>
				  &nbsp;&nbsp;&nbsp;&nbsp;--> Provide a system that can accommodate bidding transaction 24/7. </span><br><br>
				  
				  
				  
				  
				  
				  
				  
				  
				 </font>
				
 
  
  </div>
    </div>
    <!-- end of center content -->
   
    <!-- end of right content -->
  </div><!-- end of main content -->
  <?php include("footer.php")?>