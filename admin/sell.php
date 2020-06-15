<?php

include('conn.php');

	
			include('header.php');
	


?>

 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script src="jquery-1.10.2.js" type="text/javascript">

</script>
	<script type="text/javascript">
			$("document").ready(function(){
									
					
				//$("#state").hide();
					$("#catid").change(function(){
					//$("#state").show();
					$("#subid").show();
					var id=$(this).val();
					//alert(id);
			
					
					$.ajax({
						url:"selectcat.php",
						type:"POST",
						data:{catid:id},
						success:function(result){
							$("#subid").html(result);
							
						
						}						
					});
				});
			
			});	
	</script>
	<link rel="stylesheet" href="jquery-ui.css" />
<script src="jquery-1.9.1.js"></script>
<script src="jquery-ui.js"></script>
<script type="text/javascript">
$(function() {
var dates = $(" #enddate").datepicker({
minDate: '0',
dateFormat: "yy-mm-dd",
onSelect: function(selectedDate) {
var option = this.id == "startdate" ? "minDate" : "maxDate",
instance = $(this).data("datepicker"),
date = $.datepicker.parseDate(
instance.settings.dateFormat ||
$.datepicker._defaults.dateFormat,
selectedDate, instance.settings);
dates.not(this).datepicker("option", option, date);
}
});
});
</script>

</head>
<div class="crumb_navigation"> Navigation: <a href="index.php">Home</a> &loz; <span class="current">Product</span> </div>
    <div class="left_content">
      <?php include("left.php")?>
    </div>
    <!-- end of left content -->
    <div class="center_content">
      <div class="center_title_bar">Sell Your Product</div>
      <div class="prod_box">
<style type="text/css">
<!--
.style2 {color: #0fa0dd}
-->
</style>
<body>

<form action=""  method="post" class="register" enctype="multipart/form-data">
<link rel="stylesheet" type="text/css" href="css/default.css"/>
		   
         
  <fieldset class="row2">
  <?php
if(isset($_POST['submit']))
{
include('conn.php');
//$name=$_GET['name'];

 
		$old=$_FILES['ufile']['tmp_name'];
	$new="Product/".$_FILES['ufile']['name'];
    
		 
 
$itname=$_POST['itname'];
$catid=$_POST['catid'];
$subid=$_POST['subid'];
$descri=$_POST['descri'];
$name=$_SESSION['uname'];
$itadddate=$_POST['itadddate'];
$itlastdate=$_POST['itlastdate'];
$itprice=$_POST['itprice'];
$itbidprice=$_POST['itbidprice'];
$querycity="select regid from registration where uname='$name'";
		$cityresult=mysql_query($querycity);
			$citydata=mysql_fetch_array($cityresult);
			$regid=$citydata['0'];
	if(move_uploaded_file($old,$new))
	{	    
 $sql="INSERT INTO itemmaster(itid,itname,catid,subid,descri,regid,itadddate,itlastdate,itprice,itbidprice,new) VALUES('itid','$itname', '$catid','$subid', '$descri', '$regid','$itadddate', '$itlastdate', '$itprice', '$itbidprice','$new')";
	 
	
     if( mysql_query($sql))
	{
		echo "</br><center><b><font color=\"green\">Product Added Successfully </font></b></center>";
	}
	else
	{
	
		echo mysql_error();
		echo "$</br><center><b><font color=\"red\">Product Not Added Successfully </font></b></center>";
	}
   } }
	
?>
  <legend><span class="style2">Enter Product Detail</span> </legend>
                <p>&nbsp;</p>
				
                <p>
                  <label>Item Name *                    </label>
                  <input type="text" name="itname" class="long" required/>
                </p>
				
		
  <p>
                    <label>Category *                    </label>
                    <select name="catid" id="catid">
                      <option>--Select--</option>
                      <?php
	                   $query="select * from category";
		               $rs=mysql_query($query);
		               while($data=mysql_fetch_array($rs))
		               {
			            echo "<option value='$data[0]'>$data[1]</option>";
		               }		
		
		?>
                                                                                                                                            </select>
  </p>
				 <p>
                    <label>Subcategory *
                    </label>
                    <select id="subid" name="subid" ><option>--Select--</option></select>
                </p>
  <p>
				<label>Description *    </label>
                <textarea name="descri"  cols="31" rows="3" border="1" required></textarea>
  </p>
 
		 		<p>
                    <label>Item Add Date *
                    </label>
                    <input readonly name="itadddate" id="startdate" value="<?php echo date("Y-m-d")?>"/>
                </p>
				<p>
				
                    <label>Item Last Date *
                    </label>
					
                    <input name="itlastdate" type="text" id="enddate" />
                </p>
  
                  <p> 
                  <label>Item Actual Price *
                    </label>
                    <input required type="text" name="itprice" class="long"/>
                </p>
				<p>
                    <label>Starting Bid *
                    </label>
                    <input required type="text" name="itbidprice" class="long"/>
                </p>
                
                <p>
                    <label>Item Image *
                    </label>
                    <input type="file" name="ufile"  accept="image/*" />
                </p>
               </br><div><button class="button2" name="submit">Submit &raquo;</button></div>
  </fieldset>
            
            
</form>

      </div>
    </div>
    <!-- end of center content -->
    
    <!-- end of right content -->
  </div>
  <!-- end of main content -->
<?php include("footer.php")?>


