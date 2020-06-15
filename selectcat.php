 
 <?php

mysql_connect("localhost","root","");
mysql_select_db("auctiondb");

if(isset($_POST['catid']))
{	
	echo "<select id='subid' name='subid'><option>--Select--</option>";
	$query="select * from subcategory where catid=".$_POST['catid'];
	$rs=mysql_query($query);
	while($data=mysql_fetch_array($rs))
	{
		echo "<option value='$data[0]'>$data[1]</option>";
	}
	echo "</select>";
	
}?>