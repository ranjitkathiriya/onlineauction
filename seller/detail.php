<?php include("header.php")?> <div class="crumb_navigation"> Navigation: <a href="index.php">Home</a> &loz; <span class="current">Product</span> </div><div class="left_content">
      <?php include("left.php")?>
	 
    </div>
    <!-- end of left content -->
    <div class="center_content">
      <div class="center_title_bar">Product Detail</div>
      <div class="prod_box" align="center">
	  <?php
	  

//session_start();
require_once'conn.php';
$id=$_GET['id'];
$query1="select * from itemmaster where itid="."'$id'";

$rs=mysql_query($query1);

while($data = mysql_fetch_array($rs))
{	
	?><table width="721" height="340">
	
	<tr><td width="280"><img src="<?php echo '../'.$data['10']; ?>" alt="" width="280" height="250" border="0" align="top" /></td>
	<td><table width="509" height="328" border="0" align="right">
      <link rel="stylesheet" type="text/css" href="css/default.css"/>
 
  <tr>
    <td><div align="center">Item Id: </div></td>
    <td width="242"><div align="center">
      <?php
        echo '544'.$data['itid'];
    ?>
    </div></td>
  </tr>
  <tr>
    <td><div align="center">Item Name: </div></td>
    <td><div align="center">
      <?php
        echo $data['itname'];
    ?>
    </div></td>
  </tr>
  <tr>
    <td><div align="center">Subcategory: </div></td>
    <td><div align="center">
      <?php
			$querycity="select subname from subcategory where subid=".$data['subid'];
			
			$cityresult=mysql_query($querycity);
			$citydata=mysql_fetch_array($cityresult);
		    echo $citydata['subname'];
    ?>
    </div></td>
  </tr>
  <tr>
    <td><div align="center">Description: </div></td>
    <td><div align="center">
      <?php
        echo $data['descri'];
    ?>
    </div></td>
  </tr>
  <tr>
    <td><div align="center">Item Owner: </div></td>
    <td><div align="center">
      <?php
			$querycity="select name from registration where regid=".$data['regid'];
			
			$cityresult=mysql_query($querycity);
			$citydata=mysql_fetch_array($cityresult);
		    echo $citydata['name'];
    ?>
    </div></td>
  </tr>
  <tr>
    <td><div align="center">Item Add Date: </div></td>
    <td><div align="center">
      <?php
        echo $data['itadddate'];
    ?>
    </div></td>
  </tr>
  <tr>
    <td><div align="center">Item Bid Price: </div></td>
    <td><div align="center">
      <?php
        echo $data['itbidprice'];
    ?>
    </div></td>
  </tr>
  <tr>
    <td><div align="center">Time Left to Bid: </div></td>
    <td><?php
								$duedate = "2011-10-11 00:00:00";
								 $duedate = $data['itlastdate'];
								$closedate = date_format(date_create($duedate), 'Y/m/d H:i:s');
								?>
        <script language="JavaScript">
								TargetDate = "<?php echo $closedate ?>";
								BackColor = "";
								ForeColor = "navy";
								CountActive = true;
								CountStepper = -1;
								LeadingZero = true;
								DisplayFormat = "%%D%% Days, %%H%% Hours, %%M%% Minutes, %%S%% Seconds.";
								FinishMessage = "Bidding closed!";
								</script>
        <script language="JavaScript" src="js/countdown.js"></script></td>
  </tr>
  <tr>
    <td></td><td><h3 align="center">  <a href="bidlog.php?id=<?php echo $data['itid'];?>">Click here to View Bid Log</a></h3></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <?php
}

?>
  </tr>
	  </table></td></tr></table>
</div>
    </div>
    <!-- end of center content -->
   
    <!-- end of right content -->
  </div><!-- end of main content -->
  <?php include("footer.php")?>