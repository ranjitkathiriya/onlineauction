 
 <?php

mysql_connect("localhost","root","");
mysql_select_db("auctiondb");

if(isset($_POST['stid']))
{	
	echo "<select id='ctid' name='ctid'><option>--Select--</option>";
	$query="select * from city where stid=".$_POST['stid'];
	$rs=mysql_query($query);
	while($data=mysql_fetch_array($rs))
	{
		echo "<option value='$data[0]'>$data[1]</option>";
	}
	echo "</select>";
	
}?>