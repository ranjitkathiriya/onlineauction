<?php
session_start();
include('conn.php');
if ($_SESSION != null ){
	
			include('loginheader.php');
	}else{
		include('header.php');
	}
	 require ("conn.php"); ?>
<div class="crumb_navigation"> Navigation: <a href="index.php">Home</a> &loz; <span class="current">Bid Log</span> </div>
<div class="left_content">
      <?php include("left.php")?>
    </div>
    <!-- end of left content -->
    <div class="center_content">
      <div class="center_title_bar">Bidding Log</div>
      

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
	<script language="JavaScript" type="text/javascript" src="administrator/jTPS/jquery.js"></script>
    <script language="JavaScript" type="text/javascript" src="administrator/jTPS/jTPS.js"></script>
	<link rel="stylesheet" type="text/css" href="css/default.css"/>

        <script>
$(document).ready(function () {
	$('#demoTable').jTPS( {perPages:[5,12,15,50,'ALL'],scrollStep:1,scrollDelay:30,clickCallback:function () {    
	// target table selector
    var table = '#demoTable';
	// store pagination + sort in cookie
	document.cookie = 'jTPS=sortasc:' + $(table + ' .sortableHeader').index($(table + ' .sortAsc')) + ',' + 'sortdesc:' + $(table + ' .sortableHeader').index($(table + ' .sortDesc')) + ',' +'page:' + $(table + ' .pageSelector').index($(table + ' .hilightPageSelector')) + ';';
	}
    });
	// reinstate sort and pagination if cookie exists
	var cookies = document.cookie.split(';');
	for (var ci = 0, cie = cookies.length; ci < cie; ci++) {
		var cookie = cookies[ci].split('=');
		if (cookie[0] == 'jTPS') {
			var commands = cookie[1].split(',');
			for (var cm = 0, cme = commands.length; cm < cme; cm++) {
				var command = commands[cm].split(':');
				if (command[0] == 'sortasc' && parseInt(command[1]) >= 0) {
					} else if (command[0] == 'sortdesc' && parseInt(command[1]) >= 0) {
						$('#demoTable .sortableHeader:eq(' + parseInt(command[1]) + ')').click().click();
						} else if (command[0] == 'page' && parseInt(command[1]) >= 0) {
							$('#demoTable .pageSelector:eq(' + parseInt(command[1]) + ')').click();
						}
					}
				}
			}
			// bind mouseover for each tbody row and change cell (td) hover style
			$('#demoTable tbody tr:not(.stubCell)').bind('mouseover mouseout',
			function (e) {
			// hilight the row
			e.type == 'mouseover' ? $(this).children('td').addClass('hilightRow') : $(this).children('td').removeClass('hilightRow');
                                }
                        );

                });


        </script>
        <style>
                body {
                         color: #373C40;
    font-family: Verdana,Arial, Helvetica, sans-serif;
    height: 100%;
   
    margin:0px;
                }
                #demoTable thead th {
                        white-space: nowrap;
                        overflow-x:hidden;
                        padding: 3px;
                }
                #demoTable tbody td {
                        padding: 3px;
                }
        </style>

<meta charset="UTF-8"></head>

	<div id="container">
	<div class="prod_box" >
	<?php
		$id = $_GET['id'];
		$pname = mysql_query("SELECT * FROM itemmaster WHERE itid='$id'")or die(mysql_error());
		$pnamea = mysql_fetch_array($pname);
	?>
						  <center><h3><?php echo $pnamea['itname']; ?> Bidding Log</h3></br></center>
                           <div id="bodycon">
                          <table id="demoTable" style="border: 1px solid #ccc;" cellspacing="0" width="700">
        <thead>
                <?php echo '<tr align="center">';
                        echo '<th sort="index" align="center">Bidder</th>';
                        echo '<th sort="date" align="center">Date of Bid Placed</th>';
                        echo '<th sort="description" align="center">Amount</th>';
                        
                echo'</tr>'; ?>
        </thead>
        <tbody>
        	<?php 
				$itid = $_GET['id'];
				$query = mysql_query("SELECT * FROM bidreport LEFT JOIN registration ON registration.uname = bidreport.bidder LEFT JOIN itemmaster ON itemmaster.itid = bidreport.itid WHERE itemmaster.itid = '$itid'"); 
				

				while ($prod = mysql_fetch_array($query)){
				
				
		    
					echo 
					"<tr>
                        <td align='center'>".$prod['uname']."</td>
                        <td align='center'>".$prod['biddatetime']."</td>
                        <td align='center'>Rs.".$prod['bidamount']."</td>
					</tr>";
				}
			?>

        </tbody>
        <tfoot class="nav">
                <tr>
                        <td colspan=7>
                                <div class="pagination"></div>
                                <div class="paginationTitle">Page</div>
                                <div class="selectPerPage"></div>
                                <div class="status"></div>
                        </td>
                </tr>
        </tfoot>
</table>

		</div>
	</div> <!-- container -->

      </div>
    </div>
    <!-- end of center content -->
    
    <!-- end of right content -->
 
  <!-- end of main content -->
<?php include("footer.php")?>

