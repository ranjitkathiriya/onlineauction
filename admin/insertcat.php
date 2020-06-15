<?php


mysql_connect("localhost","root","");
mysql_select_db("auctiondb");
$catname=$_POST['catname'];

$query=mysql_query("insert into category(catname) values('$catname')");

if($query)
 {
 echo "Success";
 
 }
 else
 {
  echo"not success";
 }
 ?>