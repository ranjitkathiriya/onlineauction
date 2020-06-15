<?php {
session_start();
	if ($_SESSION != null ){
	
			include('loginheader.php');
	}else{
		
		include('header.php');
	}
}?>
  

	<script src="js/jquery-1.7.2.min.js" type="text/javascript" > </script>
	
	<script type="text/javascript">

		$( document ).ready( function( ) {
				$( '.tree li' ).each( function() {
						if( $( this ).children( 'ul' ).length > 0 ) {
								$( this ).addClass( 'parent' );     
						}
				});
				
				$( '.tree li.parent > a' ).click( function( ) {
						$( this ).parent().toggleClass( 'active' );
						$( this ).parent().children( 'ul' ).slideToggle( 'fast' );
				});
				
				$( '#all' ).click( function() {
					
					$( '.tree li' ).each( function() {
						$( this ).toggleClass( 'active' );
						$( this ).children( 'ul' ).slideToggle( 'fast' );
					});
				});
				
		});
        
	</script>
  
      <div class="crumb_navigation"> Navigation: <a href="index.php">Home</a> &loz; <span class="current">Store</span> </div>
 <div class="left_content">
      <?php include("left1.php")?>
    </div>
    <!-- end of left content -->
    <div class="center_content">
      <div class="center_title_bar">Stores</div>
      <div class="prod_box">


<?php 
						include('conn.php');
						$queryt="select * from category";
						$queryresult=mysql_query($queryt);
						$length=ceil(mysql_num_rows($queryresult)/2);
						

?>
		
		

	<table width="910" height="541">
		<link rel="stylesheet" href="css/style.css">
		<tr>
		
			<td width="386"><div class="tree" >
				<ul>			
					 <?php
						 $cnt=0;
						 while($datat=mysql_fetch_array($queryresult))
						 {
						 		
						 	if($length == $cnt)
							{
								
								echo "</li></ul></div></td><td><div class='tree'><ul>";
							}
							$cnt++;
						  ?>
						  
						  <li><a ><?php echo $datat['catname'];?> </a><ul>
									<?php
										
										$querys="select * from subcategory where catid=".$datat['catid'];
										$results=mysql_query($querys);
										
										while($datas=mysql_fetch_array($results))
										{	//print_r($data); 
										?>
										
											<li><a href="latest1.php?id=<?php echo $datat['catid']?>&subid=<?php echo $datas['subid'];?>"><?php echo $datas['subname'];?></a></li>
										
											
									<?php }
										 
									?>
									</ul></li></br>
									
									
						 <?php 
						 }
						 
						?>
					
	    </ul>
			  </div>
		  
		</tr>
  </table>
   </div>
    </div>
    <!-- end of center content -->
    
    <!-- end of right content -->
  </div>
  <!-- end of main content -->
<?php include("footer.php")?>

