<?php {
	{
		include('header.php');
	}
}?>
    <div class="left_content">
      <?php include("left.php")?>
    </div>
    <!-- end of left content -->
    <div class="center_content">
	<link rel="stylesheet" type="text/css" href="css/default.css"/>
      <div class="center_title_bar">Advanced Search </div>
      <div class="prod_box">
	  <form action="" method="post" >
	  <table width="509" align="center" >
	  <tr><td width="150">Enter Keywords :</td>
	  <td width="347"><input type="text" size="22" name="key"></td></tr>
	   <tr><td>Select a Category :</td>
	     <td><select name="catid">
                      <option>--Select--</option>
                      <?php
					  include('conn.php');
	                   $query="select * from category";
		               $rs=mysql_query($query);
		               while($data=mysql_fetch_array($rs))
		               {
			            echo "<option value='$data[0]'>$data[1]</option>";
		               }		
		
		?>
                                                                                                                                            </select></td>
	   </tr>
	   <tr><td>Price Range :</td><td><input type="text" name="low"> - <input type="text" name="high"></td></tr>
	   <tr><td></td><td>Minimum To Maximun<br><br></td></tr>
	   <tr><td>Listing Types :</td><td><input type="checkbox" value="auction">&nbsp;&nbsp;Auction<br><br>
	   <input type="checkbox" value="Fixed">&nbsp;&nbsp;Fixed Price<br><br>
	   <input type="checkbox" value="class">&nbsp;&nbsp;Classified<br><br>
	   <input type="checkbox" value="list">&nbsp;&nbsp;Include Completed Listing<br><br></td></tr>
	   <tr><td>Listing Id :</td><td><input type="text" size="22" name="Listing"></td></tr>
	   <tr><td height="34">Seller :</td>
	   <td><input type="text" size="22" name="Seller"></td></tr>
	   <tr><td></td><td><input class="button4" type="reset" value="Reset >>"><input type="submit"  class="button4"value="Search >>">&nbsp;</td></tr>
	   </table>
	  </form>

  </div>
    </div>
    <!-- end of center content -->
 
  </div>
  <!-- end of main content -->
<?php include("footer.php")?>


