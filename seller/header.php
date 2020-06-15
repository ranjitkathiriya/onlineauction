<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Sky Auctions</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style.css" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
<script type="text/javascript" src="js/boxOver.js"></script>
<style type="text/css">
<!--
.style7 {font-family: "Times New Roman", Times, serif; color: #CCCCCC; font-size: 14px;}
.style8 {color: #FFFFFF}
-->
</style>
<link rel="stylesheet" type="text/css" href="auto/style.css" />
 <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="js/jquery.autocomplete.min.js"></script>
  <script>
  $(document).ready(function(){
  
  	var packages = [
		<?php 
		include('conn.php');
			$query = mysql_query("select * from itemmaster");
			
			while($data=mysql_fetch_array($query))
			{
				echo "{ value: '".$data['itname']."', data: '".$data['itid']."' },";
			}
		?>
	  ];
	  
	  // setup autocomplete function pulling from currencies[] array
	  $('#autocomplete').autocomplete({
	  
		lookup: packages,
		onSelect: function (suggestion) {
		
		  //$('#outputcontent').html(thehtml);
		  window.location.assign('main1.php?id='+suggestion.data);
		}
	  });
  });
  </script>
</head>
<body>
<div id="main_container">
  <div class="top_bar">
    <div class="top_search">
	
      <div class="search_text"><a href="/">Search</a></div>
      <input type="text1" class="search_input" name="search" id="autocomplete"/>
      <input type="image" src="images/search.gif" class="search_bt"/>
    </div>
    <div class="languages  style7"> 
      <div align="center"><a href="advanced.php" class="style8"></a> </div>
    </div>
  </div>
  <div id="header">
    <div id="logo"> <a href="index.php"><img src="images/logo.png" alt="" border="0" width="320" height="140" /></a> </div>
   
      <div class="top_divider"><img src="images/header_divider.png" alt="" width="1" height="164" /></div>
   
      <div class="top_divider"><img src="images/header_divider.png" alt="" width="1" height="164" /></div>
   
    <!-- end of oferte_content-->
  </div>

  <div id="main_content">
    <div id="menu_tab">
      <div class="left_menu_corner"></div>
      <ul class="menu">
        <li><a href="index.php" class="nav1"> Home</a></li>
        <li class="divider"></li>
        
        <li><a href="sell.php" class="nav4">Sell</a></li>
        <li class="divider"></li>
		<li><a href="account.php" class="nav2">Account</a></li>
        
     <li class="divider"></li>
	<li><?php
	session_start();
		echo "&nbsp;You Logged As Mr." .$_SESSION['name'];
		?></li>
        
        
        
       
	   <li><a href="logout.php" class="nav5">Logout</a></li>
      </ul>
      <div class="right_menu_corner"></div>
    </div>
    <!-- end of menu tab -->
   