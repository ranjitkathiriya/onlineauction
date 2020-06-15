<?php include("header.php")?>
   <div class="crumb_navigation"> Navigation: <a href="index.php">Home</a> &loz; <span class="current">Registered User</span> </div> <div class="left_content">
      <?php include("left.php")?>
    </div>
    <!-- end of left content -->
    <div class="center_content" >
      <div class="center_title_bar">Registered User</div>
      <div class="prod_box">
        
          <link rel="stylesheet" type="text/css" href="css/default.css"/>
		  
          <p>
            <style type="text/css">
<!--
.style2 {color: #0fa0dd}
-->
          </style>          
        </p>
        <table width="793" height="70">
<td width="49" height="38" class="style2">Name</td>
<td class="style2" width="44">Email</td>
<td class="style2" width="75">Password</td>
<td class="style2" width="80">Where hear</td>
<td class="style2" width="80">Address</td>
<td class="style2" width="32">City</td>
<td class="style2" width="55">Mobile</td>
<td class="style2" width="80">User Type</td>
<td class="style2" width="63">Country</td>
<td class="style2" width="59">Gender</td>
<?php /*?><td class="style2" width="51">Update</td><?php */?>

</tr>
<?php
//session_start();
require_once'conn.php';

$query1="select * from registration";

$rs=mysql_query($query1);
while($data = mysql_fetch_array($rs))
{	
	?>
    <tr align="center">
    <td height="22"><?php
        echo $data['name'];
    ?></td>
   <td><?php
        echo $data['uname'];
    ?></td>
	<td><?php
        echo $data['pass'];
    ?></td>
	  
	<td><?php
        echo $data['hear'];
    ?></td>
	<td>
    <?php
        echo $data['addd'];
    ?>
	</td>
	<td>
    <?php
			$querycity="select * from city where ctid=".$data['ctid'];
			
			$cityresult=mysql_query($querycity);
			$citydata=mysql_fetch_array($cityresult);
		    echo $citydata['ctname'];
    ?>
	</td>
<td>
    <?php
        echo $data['mno'];
    ?>
	</td>
	<td>
   <?php
	if($data['utype'] == 0)
	{
	echo "Admin";
	}
	else if($data['utype'] == 1)
	{
	echo "Buyer";
	}
	else if($data['utype'] == 2)
	{
	echo "Seller +";
	}
	
    ?>
	</td>
	<td>
    <?php
        echo $data['country'];
    ?>
	</td>
	<td>
    <?php
        echo $data['gender'];
    ?>
	
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

