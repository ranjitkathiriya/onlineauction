
<?php

session_start();

	if ($_SESSION != null )
	   
	   {
	         include('loginheader.php');
	}else{
		include('header.php');
	}
?> <div class="crumb_navigation"> Navigation:  <span class="current">Home</span> </div>
    <div class="left_content">
      <?php include("left.php")?>
    </div>
	
	<link rel="stylesheet" type="text/css" href="css/default.css"/>
    <!-- end of left content -->
    <div class="center_content">
      <?php include("main.php")?>
	  </div>
    <!-- end of center content -->
   
  </div>
  <!-- end of main content -->
<?php include("footer.php")?>
