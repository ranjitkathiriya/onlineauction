<?php include("header.php")?>
   <div class="crumb_navigation"> Navigation: <a href="index.php">Home</a> &loz; <span class="current">Category</span> </div> <div class="left_content">
      <?php include("left.php")?>
    </div>
    <!-- end of left content -->
    <div class="center_content">
      <div class="center_title_bar">Add Category</div>
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
$catname=$_POST['catname'];

$query=mysql_query("insert into category(catname) values('$catname')");

if($query)
 {
 echo "Success";
 
 }
 else
 {
  echo"not success";
 }
 }
 ?>
 <form action=""  method="post" class="register">
           <link rel="stylesheet" type="text/css" href="css/default.css"/>
		   
         
  <fieldset class="row2">
  <legend><span class="style2"></span> </legend>
                <p>&nbsp;</p>
				
                <p>
                  <label>Category Name *                    </label>
                  <input type="text" name="catname" class="long"/>
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

