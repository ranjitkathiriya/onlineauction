<?php

mysql_connect("localhost","root","");
mysql_select_db("auctiondb");
$stname=$_POST['stname'];

$query=mysql_query("insert into state(stname) values('$stname')");

if($query)
 {
 echo "Success";
 
 }
 else
 {
  echo"not success";
 }
 ?>