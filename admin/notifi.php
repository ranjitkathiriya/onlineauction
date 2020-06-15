<?php include("header.php")?>
    <div class="crumb_navigation"> Navigation: <a href="index.php">Home</a> &loz; <span class="current">Notifications</span> </div><div class="left_content">
      <?php include("left.php")?>
    </div>
    <!-- end of left content -->
    <div class="center_content" >
      <div class="center_title_bar">Notification</div>
      <div class="prod_box">
        
          <link rel="stylesheet" type="text/css" href="css/default.css"/>
		  
<style type="text/css">
<!--
.style2 {color: #0fa0dd}
-->
</style>		  
		  
<table width="791">
<td class="style2" width="49">Contact Id</td>
<td class="style2" width="49">Name</td>
<td class="style2" width="44">Email</td>
<td class="style2" width="75">Mobile</td>
<td class="style2" width="80">Detail</td>
<td class="style2" width="51">&nbsp;</td>
</tr>
<?php

require_once'conn.php';

$query1="select * from contact";

$rs=mysql_query($query1);
while($data = mysql_fetch_array($rs))
{	
	?>
    <tr>
	<td height="22"><?php
        echo $data['cid'];
    ?></td>
    <td height="22"><?php
        echo $data['name'];
    ?></td>
   <td><?php
        echo $data['uname'];
    ?></td>
	<td><?php
        echo $data['mno'];
    ?></td>
	  
	<td><?php
        echo $data['detail'];
    ?></td>
	
	<td><b><font color="#663300"><a href="reply.php?uname=<?php echo  $data['uname'];?>">Reply</a></font></b></td>

	<?php
}

?>
</table>
		  
		  
		  
		  
      </div>
    </div >
    <!-- end of center content -->
  
  </div>
  <!-- end of main content -->
<?php include("footer.php")?>

