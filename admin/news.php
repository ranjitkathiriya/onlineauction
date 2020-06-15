<?php include("header.php")?>
    <div class="crumb_navigation"> Navigation: <a href="index.php">Home</a> &loz; <span class="current">Newsletter</span> </div><div class="left_content">
      <?php include("left.php")?>
    </div>
    <!-- end of left content -->
    <div class="center_content" >
      <div class="center_title_bar">Newsletter Subscription</div>
      <div class="prod_box">
        
          <link rel="stylesheet" type="text/css" href="css/default.css"/>
		  
          <p>
            <style type="text/css">
<!--
.style2 {color: #0fa0dd}
-->
          </style>          
        </p>
        <table width="749" height="66">
<td width="31" height="38" class="style2"><div align="center">Id</div></td>
<td class="style2" width="173"> <div align="center"> Email</div></td>

<?php /*?><td class="style2" width="51">Update</td><?php */?>
<td class="style2" width="180"><div align="center">Delete</div></td>
</tr>
<?php
//session_start();
require_once'conn.php';

$query1="select * from newsletter";

$rs=mysql_query($query1);
while($data = mysql_fetch_array($rs))
{	
	?>
    <tr align="center">
    <td height="22"><?php
        echo $data['0'];
    ?></td>
   <td><?php
        echo $data['1'];
    ?></td>
	
	
<td><b><font color="#663300"><a href="delete1.php?id=<?php echo  $data['0'];?>">Delete</a></font></b></td>
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

