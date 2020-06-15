<?php

mysql_connect("localhost","root","");
mysql_select_db("auctiondb");
$subname=$_POST['subname'];
$catid=$_POST['catid'];
$query=mysql_query("insert into subcategory(subname,catid)values('$subname','$catid')");
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
 