<?php
mysql_connect("localhost","root","");
mysql_select_db("auctiondb");
$ctname=$_POST['ctname'];
$stid=$_POST['stid'];
$query=mysql_query("insert into city(ctname,stid)values('$ctname','$stid')");
if($query)
 {
 echo "Success";
  }
 else
 {
 echo "Notsuccess";
 echo mysql_error();
 }
 ?>
 