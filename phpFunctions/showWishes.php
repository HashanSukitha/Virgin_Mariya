<?php 
include('phpFunctions/config.php');


$result = mysql_query("SELECT vir_user.u_name,vir_wishies.wish_date,vir_wishies.wish_time,vir_wishies.wish 
						FROM vir_user 
						INNER JOIN vir_wishies
						on vir_user.u_id=vir_wishies.u_id", $link);
						
while($row = mysql_fetch_array($result))
  {
  echo '<div class="wichContainer">
            <a href="#">
			 <div class="wish">
			   '.$row['wish'].'
			 </div>
			</a>
		      
			 <div class="WishDetailBar">
			   <div class="UserName">'.$row['u_name'].'</div>
			   <div class="OtherDetails">'.$row['wish_date']." | ".$row['wish_time'].'</div>
			 </div>
			 
		</div>';
 
  }
?>