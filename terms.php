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
      <div class="center_title_bar">Terms & conditions</div>
	  <br><br><br><br>
      <div class="prod_box" ></div>
      <font size="2"> <center><p>Welcome to Sky Auctions User Agreement. This agreement describes the terms and conditions
									applicable to your use of our services. By clicking the "I Accept" button, you accept ther terms and 
										conditions of this agreement<p></center><br>
				
		<b> &nbsp;&nbsp;&nbsp;&nbsp;Eligibility to Membership</b><br>
				 <br><span>&nbsp;&nbsp;&nbsp;&nbsp;Our services are available only to individuals who can form legally binding contract without limiting
				 the foregoing, our services are not available to minor. if you do not qualify, please do not use our services.</li></span><br><br>
				 <b>&nbsp;&nbsp;&nbsp;&nbsp;Fees</b><br>
				 <br><span >&nbsp;&nbsp;&nbsp;&nbsp;Joining Sky Auctions cost Rs.150 for the membership. Our then current Fees and Credit Policies for selling
				 item are available at Sky Auctions. Unless otherwise stated, all fees are quoted in Philippines Peso. You are responsible for paying
				 all applicable taxes and for all hardware, software, services and other costs you incur to bid, buy.</li></span><br><br>
				 <b>&nbsp;&nbsp;&nbsp;&nbsp;Bidding and Buying</b><br>
				<br> <span >&nbsp;&nbsp;&nbsp;&nbsp;As a bidder, if you have the highest bid at the end of the auction, at or above the minimum bid price
				 and your bid is accepted by the seller, you are obligated to complete the transactions.</li></span><br><br>
				 <b>&nbsp;&nbsp;&nbsp;&nbsp;Registered Office</b><br>
				<br><span >&nbsp;&nbsp;&nbsp;&nbsp;Sky Auctions Ltd, registered in India, company no.3697708. 
Registered Office: 
44,near hirabaug circle,
varachha,surat-395006.</span><br /><br /></font>
				
 
  
  </div>
    </div>
    <!-- end of center content -->
   
    <!-- end of right content -->
  </div><!-- end of main content -->
  <?php include("footer.php")?>