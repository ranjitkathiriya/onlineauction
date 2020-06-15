<?php
include('conn.php');



?>


<?php 
		include('header.php');
?><div class="crumb_navigation"> Navigation: <a href="index.php">Home</a> &loz; <span class="current">Product</span> </div><div class="left_content">
      <?php include("left.php")?>
	 
    </div>
    <!-- end of left content -->
    <div class="center_content">
      <div class="center_title_bar">Product Detail</div>
      <div class="prod_box" align="center">
	  <?php
	  


require_once'conn.php';
$id=$_GET['id'];
$query1="select * from itemmaster where itid="."'$id'";

$rs=mysql_query($query1);

while($data = mysql_fetch_array($rs))
{	
	?><table width="801" height="321" style="table-layout:fixed"> 
	
	<tr><td width="280"><img src="<?php echo '../'.$data['10']; ?>" alt="" width="280" height="250" border="0" align="top" /></td>
	<td><table width="505" height="280" border="0" align="right">
          <link rel="stylesheet" type="text/css" href="css/default.css"/>
          
        
          <tr>
		  
            <td><div align="center">Item Id: </div></td>
            <td width="242"><div align="center"><?php
        echo '544'.$data['itid'];
    ?></div></td>
          </tr>
          <tr>
            <td><div align="center">Item Name: </div></td>
            <td><div align="center"><?php
        echo $data['itname'];
    ?></div></td>
          </tr>
          <tr>
            <td><div align="center">Subcategory: </div></td>
            <td><div align="center"><?php
			$querycity="select subname from subcategory where subid=".$data['subid'];
			
			$cityresult=mysql_query($querycity);
			$citydata=mysql_fetch_array($cityresult);
		    echo $citydata['subname'];
    ?></div></td>
          </tr>
          <tr>
            <td><div align="center">Description: </div></td>
            <td><div align="center"><?php
        echo $data['descri'];
    ?></div></td>
          </tr>
          <tr>
            <td><div align="center">Item Owner: </div></td>
            <td><div align="center"><?php
			$querycity="select name from registration where regid=".$data['regid'];
			
			$cityresult=mysql_query($querycity);
			$citydata=mysql_fetch_array($cityresult);
		    echo $citydata['name'];
    ?></div>            </td>
          </tr>
         
          <tr>
            <td><div align="center">Item Add Date: </div></td>
            <td><div align="center"><?php
        echo $data['itadddate'];
    ?></div>            </td>
          </tr>
         
		 
		  
		   <tr>
            <td><div align="center"> Start Bid Price: </div></td>
            <td><div align="center"><?php
        echo $data['itbidprice'];
    ?>
           </div> </td>
          </tr>
		   <tr>
		    <td height="21"><div align="center">Time Left to Bid: </div></td><td><?php
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
	        </tr></table></td></tr><tr><td colspan="2"><table width="55%" align="right"><!--</table>-->
								<?php $itid = $data['itid'];
							$prodsbid = $data['itbidprice'];
							
		                    $querycity="select * from registration where regid=".$data['regid'];
		                    $cityresult=mysql_query($querycity);
			                $citydata=mysql_fetch_array($cityresult);
		                    $seller =  $citydata['uname'];
   
       
							
							//for displaying highest bid and no of bidders
							$query2 = mysql_query("SELECT * FROM bidreport WHERE itid = '$itid'") or die (mysql_error());
							$noofbidders = MYSQL_NUMROWS($query2);
							
							$highbid = $prodsbid;
							while($highonthis = mysql_fetch_array($query2)){
								$checkthis = $highonthis['bidamount'];
								if($checkthis > $highbid){
									$highbid = $checkthis;
								}
							}
							
							$highestbidder = mysql_query("SELECT * FROM bidreport WHERE bidamount = '$highbid'")or die(mysql_error());
							$highestbiddera = mysql_fetch_array($highestbidder);
							$hibidder = $highestbiddera['bidder'];
				?>
							
							<?php echo"</span>
								<br />
								<tr><td>&nbsp&nbsp Bids: </td><td><span class='blue'>";?><?php echo $noofbidders;?><?php echo"</span></td></tr><tr><td>
								&nbsp&nbsp Highest Bid: </td><td><span class='blue'></br>";?><?php echo $highbid;?><?php echo"</span></br></br></td></tr><tr><td>
								&nbsp&nbsp Highest Bidder:</td><td> ";?>
								<?php 
								$name = mysql_query("SELECT * FROM registration WHERE uname = '$hibidder'")or die(mysql_error());
								$namea = mysql_fetch_array($name);
								echo $namea['uname'];?>
								    <?php echo "</td><tr><td></td><td></br><span class='blue'>(Enter Price higher than Rs.".$highbid.")</span>";?><?php echo'</span></td></tr><tr><td colspan="2">
									<form method = "post" action="bidconfirm.php?id='.$itid.'">
									
										<input type = "hidden" value="'.$highbid.'" name="high">
										&nbsp&nbsp <strong></br>Rs.&nbsp;</strong><input type="text" name="bidamount">
										<input type="submit" class="button4" value="Place Bid >>" name="submit">
									</form>
								&nbsp&nbsp <span class="blue"><strong>';
								
								echo "<br /><br /><br /><br />&nbsp&nbsp&nbsp&nbsp<span class='blue'> click <a rel='facebox' href='bidlog.php?id=".$itid."'>here</a> to view Bidding Log</span></strong>";
							
					?>
					</table></td></tr></table>
        <?php
}
?>            
			
      </div>
    </div>
    <!-- end of center content -->
   
    <!-- end of right content -->
  </div><!-- end of main content -->
  <?php include("footer.php")?>
