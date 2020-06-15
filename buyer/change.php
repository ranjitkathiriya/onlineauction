<?php include("header.php")?>
     <div class="crumb_navigation"> Navigation: <a href="index.php">Home</a> &loz; <span class="current">Change Password</span> </div><div class="left_content">
      <?php include("left.php")?>
    </div>
    <!-- end of left content -->
    <div class="center_content">
	
      <div class="center_title_bar">Change Profile</div>
      <div class="prod_box">

<link rel="stylesheet" type="text/css" href="css/default.css"/>
	  <form method="post">
	    <table width="337" height="163"  align="center">
          <?php 
include("conn.php");
$id=$_GET['id'];

if(isset($_POST['submit']))
{

$pass=$_POST['pass'];


$query=mysql_query("update registration set pass='$pass' where uname='$id' ");


if($query)
{
echo "<td></td><td><center><b><font color=\"green\">Password Changed Successfully</font></b></center></td>";
}
else
{
echo "<td></td><td><b><font color=\"red\">Password Not Changed</font></b></td>";
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
            <td>Email: </td>
            <td><?php
        echo $data['uname'];
    ?></td>
          </tr>
          <tr>
            <td>Password: </td>
            <td><input name="pass" type="password" size="30" /></td>
          </tr>
          <tr>
            <td>Confirm Password: </td>
            <td><input name="cpass" type="password" size="30" /></td>
          </tr>
  <td></td>
      <td><input type="reset" name="reset" class="button4" value="Reset"/>
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

