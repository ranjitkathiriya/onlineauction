<?php include("header.php")?>
   <div class="crumb_navigation"> Navigation: <a href="index.php">Home</a> &loz; <span class="current">Bid Summary</span> </div> <div class="left_content">
      <?php include("left.php")?>
    </div>
    <!-- end of left content -->
    <div class="center_content" >
      <div class="center_title_bar">Bid Summary</div>
      <div class="prod_box">
        
          <link rel="stylesheet" type="text/css" href="css/default.css"/>
		  
          <p>
            <style type="text/css">
<!--
.style2 {color: #0fa0dd}
-->
          </style>          
        </p>
        <table width="807" height="68">
<td width="46" height="38" class="style2">Item Id</td>
<td class="style2" width="73">Item Name</td>
<td class="style2" width="63">Last Date</td>
<td class="style2" width="85">Owner Name</td>
<td class="style2" width="98">Owner Address</td>
<td class="style2" width="124">Owner Mobile</td>
<td class="style2" width="93">Highest Bidder</td>
<td class="style2" width="101">Bidder Address</td>
<td class="style2" width="84">Bid Amount</td>

<?php /*?><td class="style2" width="51">Update</td><?php */?>
</tr>
<?php
//session_start();
require_once'conn.php';

$query1="select distinct B.itid,R.regid,itname,itlastdate,uname,bidder,addd,mno, max(bidamount) as bidamount from registration as R,itemmaster as I,bidreport as B where I.itid = B.itid and I.regid = R.regid group by I.itid";

				
					
$rs=mysql_query($query1);
while($data = mysql_fetch_array($rs))
{	
	?>
    <tr align="center">
    <td height="22"><?php
        echo $data['itid'];
    ?></td>
   <td><?php
        echo $data['itname'];
    ?></td>
	<td><?php
        echo $data['itlastdate'];
    ?></td>
	<td><?php
        echo $data['uname'];
    ?></td>
	  
	<td><?php
        echo $data['addd'];
    ?></td>
	<td>
    <?php
        echo $data['mno'];
    ?>
	</td>
	
<td>
    <?php
        echo $data['bidder'];
    ?>
	</td>
	
	<td><?php 
    $querycity="select * from registration where uname='".$data['bidder']."'";
			
			$cityresult=mysql_query($querycity);
			$citydata=mysql_fetch_array($cityresult);
		    echo $citydata['addd'];?>
	</td>
	<td>
    <?php
        echo $data['bidamount'];
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

