

<?php 
include('conn.php');
include("header.php")?>
   <div class="crumb_navigation"> Navigation: <a href="index.php">Home</a> &loz; <span class="current">City</span> </div> <div class="left_content">
      <?php include("left.php")?>
    </div>
    <!-- end of left content -->
    <div class="center_content">
      <div class="center_title_bar">Add City</div>
      <div class="prod_box">
        
<style type="text/css">
<!--
.style2 {color: #0fa0dd}
-->
</style>
<body>
<?php
if(isset($_POST['submit']))
{
mysql_connect("localhost","root","");
mysql_select_db("auctiondb");
$ctname=$_POST['ctname'];
$stid=$_POST['stid'];
$query=mysql_query("insert into city(ctname,stid)values('$ctname','$stid')");
if($query)
 {
 echo "Success";
  }
 else
 {
 echo "Notsuccess";
 echo mysql_error();
 }
 }
 ?>
 
<form method="post" class="register">
           <link rel="stylesheet" type="text/css" href="css/default.css"/>
		   
         
  <fieldset class="row2">
  <legend><span class="style2"></span> </legend>
                <p>&nbsp;</p>
				<p>
                  <label>Select State *                    </label>
                  <select name="stid">
<option>---Select---</option>
<?php
$query=mysql_query("select * from state");
while($data=mysql_fetch_array($query))
	{
		echo "<option value='$data[0]'>$data[1]</option>";
		}

?>
</select>
                </p>
				
				
                <p>
                  <label>City Name *                    </label>
                  <input type="text" name="ctname" class="long"/>
                </p>
                
 
				<div><button name="submit" class="button4">Submit &raquo;</button></div>
  </fieldset>
            
            
</form>
      </div>
    </div >
    <!-- end of center content -->
    
   
  </div>
  <!-- end of main content -->
<?php include("footer.php")?>

