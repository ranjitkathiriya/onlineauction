<?php include("header.php")?>
    <div class="crumb_navigation"> Navigation: <a href="index.php">Home</a> &loz; <span class="current">Profile</span> </div> <div class="left_content">
      <?php include("left.php")?>
    </div>
    <!-- end of left content -->
    <div class="center_content">
      <div class="center_title_bar">Your Profile</div>
      <div class="prod_box">
        <table width="516" height="314" border="1" align="center"  bordercolor="#2DA8EE">
          <link rel="stylesheet" type="text/css" href="css/default.css"/>
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
            <td><?php
        echo $data['name'];
    ?></td>
          </tr>
          <tr>
            <td>Email: </td>
            <td><?php
        echo $data['uname'];
    ?></td>
          </tr>
          <tr>
            <td>Password: </td>
            <td><?php
        echo $data['pass'];
    ?></td>
          </tr>
          <tr>
            <td>Where did you hear about Sky: </td>
            <td><?php
        echo $data['hear'];
    ?></td>
          </tr>
          <tr>
            <td>Address: </td>
            <td><?php
        echo $data['addd'];
    ?>
            </td>
          </tr>
          <tr>
            <td>City: </td>
            <td><?php
			$querycity="select * from city where ctid=".$data['ctid'];
			
			$cityresult=mysql_query($querycity);
			$citydata=mysql_fetch_array($cityresult);
		    echo $citydata['ctname'];
    ?>
            </td>
          </tr>
          <tr>
            <td>Mobile number: </td>
            <td><?php
        echo $data['mno'];
    ?>
            </td>
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
	
    ?>
            </td>
          </tr>
          <tr>
            <td>Country: </td>
            <td><?php
        echo $data['country'];
    ?>
            </td>
          </tr>
          <tr>
            <td>Gender: </td>
            <td><?php
        echo $data['gender'];
    ?>
            </td>
          </tr>
          <?php
}

?>
        </table>
      </div>
    </div >
    <!-- end of center content -->
  
  </div>
  <!-- end of main content -->
<?php include("footer.php")?>

