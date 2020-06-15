<?php
include('conn.php');
$subid=$_POST['subid'];
$catid=$_POST['catid'];


 ?>
 
 <?php



if(isset($_POST['catid']))
{	
	echo "<select id='subid'>";
	echo "<option>--select--</option>";
	$query="select * from subcategory where subid=".$_POST['subid'];
	$rs=mysql_query($query);
	while($data=mysql_fetch_array($rs))
	{
		echo "<option value='$data[0]'>$data[1]</option>";
	}
	echo "</select>";
	
}?>