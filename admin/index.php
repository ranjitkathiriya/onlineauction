<?php








?>

<?php include("header.php")?>
    <div class="crumb_navigation"> Navigation:   <span class="current">Home</span> </div><div class="left_content">
      <?php include("left.php")?>
    </div>
    <!-- end of left content -->
    <div class="center_content">
      <div class="center_title_bar">Sky Auctions Admin panel </div>
      <div class="prod_box">
	   <link rel="stylesheet" type="text/css" href="css/default.css"/>
        <?php
		echo "Welcome To Your Account Mr/Mrs." .$_SESSION['name'];
		?>
		
		
	    </div>
    </div>
    <!-- end of center content -->
 
    <!-- end of right content -->
  </div>
  <!-- end of main content -->
<?php include("footer.php")?>

