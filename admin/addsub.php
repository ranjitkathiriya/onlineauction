

<?php include("header.php")?>
    <div class="crumb_navigation"> Navigation: <a href="index.php">Home</a> &loz; <span class="current">Subcategory</span> </div><div class="left_content">
      <?php include("left.php")?>
    </div>
    <!-- end of left content -->
    <div class="center_content">
      <div class="center_title_bar">Add SubCategory</div>
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
$subname=$_POST['subname'];
$catid=$_POST['catid'];
$query=mysql_query("insert into subcategory(subname,catid)values('$subname','$catid')");
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
 
<form action=""  method="post" class="register">
           <link rel="stylesheet" type="text/css" href="css/default.css"/>
		   
         
  <fieldset class="row2">
  <legend><span class="style2"></span> </legend>
                <p>&nbsp;</p>
				<p>
                  <label>Select Category *                    </label>
                  <select name="catid">
<option>---Select---</option>
<?php
include('conn.php');
$query=mysql_query("select * from category");
while($data=mysql_fetch_array($query))
	{
		echo "<option value='$data[0]'>$data[1]</option>";
		}

?>
</select>
                </p>
				
				
                <p>
                  <label>Subcategory Name *                    </label>
                  <input type="text" name="subname" class="long"/>
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

