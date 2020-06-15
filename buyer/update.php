<?php include("header.php")?>
    <div class="crumb_navigation"> Navigation: <a href="index.php">Home</a> &loz; <span class="current">Update Profile</span> </div><div class="left_content">
      <?php include("left.php")?>
    </div>
    <!-- end of left content -->
    <div class="center_content">
	
      <div class="center_title_bar">Change Profile</div>
      <div class="prod_box">

<link rel="stylesheet" type="text/css" href="css/default.css"/>
	  <form method="post">
	    <table width="321" height="304"  align="center">
          <?php 
include("conn.php");
$id=$_GET['id'];

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$addd=$_POST['addd'];
$mno=$_POST['mno'];

$query=mysql_query("update registration set name='$name',addd='$addd',mno='$mno' where uname='$id' ");


if($query)
{
echo "<td></td><td><center><b><font color=\"green\">Profile Changed Successfully</font></b></center></td>";
}
else
{
echo "<td></td><td><b><font color=\"red\">Profile Not Changed Successfully</font></b></td>";
}
}
 ?>
          <?php

require_once'conn.php';
$name=$_SESSION['uname'];
$query1="select * from registration where uname="."'$name'";

$rs=mysql_query($query1);

while($data = mysql_fetch_array($rs))
{	
	?>
          <tr align="center"> </tr>
          <tr>
            <td>Name: </td>
            <td><input name="name" value="<?php echo $data['name']?>" type="text" size="30" /></td>
          </tr>
          <tr>
            <td>Email: </td>
            <td><?php
        echo $data['uname'];
    ?></td>
          </tr>
          
          <tr>
            <td>Address: </td>
            <td><textarea type="text" name="addd" class="long" id="addd"/></textarea>
            </td>
          </tr>
          <tr>
            <td>City: </td>
            <td><?php
			$querycity="select * from city where ctid=".$data['ctid'];
			
			$cityresult=mysql_query($querycity);
			$citydata=mysql_fetch_array($cityresult);
		    echo $citydata['ctname'];
    ?></td>
          </tr>
          <tr>
            <td>Mobile number: </td>
            <td><input name="mno" type="text" size="30" maxlength="10" /></td>
          </tr>
          <tr>
            <td>User Type: </td>
            <td><?php
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
	
    ?></td>
          </tr>
          <tr>
            <td></td>
            <td> <input type="reset" name="reset" class="button4" value="Reset"/>
                <input class="button4" name="submit" value="Change" type="submit"/>
            </td>
          </tr>
          <?php
}

?>
        </table>
	  </form>
		 
      </div>
    </div >
    <!-- end of center content -->
  
  </div>
  <!-- end of main content -->
<?php include("footer.php")?>

