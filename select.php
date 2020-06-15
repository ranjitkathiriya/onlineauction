<?php

include('conn.php');
 
		$old=$_FILES['ufile']['tmp_name'];
		$new="Product/".$_FILES['ufile']['name'];
		
		if(move_uploaded_file($old,$new))
		 {
		  $query=mysql_query("insert into image values('$new')");
		  echo "file is uploaded";
		  
		  }
		  else
		  {echo "file is not Uploaded";
		  }
?>