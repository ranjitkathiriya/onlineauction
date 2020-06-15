<?php
mysql_connect("localhost","root","") or die("connection not established");
mysql_select_db("auctiondb")or die("database not selected");


ob_start();
error_reporting(0);
?>