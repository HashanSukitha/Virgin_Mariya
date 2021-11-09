<?php 
//$link = mysql_connect("localhost", "root", "");
//mysql_select_db("virgin_mariya", $link);


$result = mysql_query("SELECT vir_user.u_name,vir_wishies.wish_date,vir_wishies.wish_time,vir_wishies.wish 
						FROM vir_user 
						INNER JOIN vir_wishies
						on vir_user.u_id=vir_wishies.u_id", $link);
						
						
						
echo '<table id=marqueeMainTb>';						
while($row = mysql_fetch_array($result))
  {
  echo '<tr>
         <td>
		    '.$row['wish'].'
		 </td>
        </tr>';
  echo '<tr>
           <td>
		      
			  <table id=marqueeSubTb>
			    <tr>
				  <td style="font-size: 12px;">
				  '.$row['u_name'].'
				  </td>
				  
				  <td id="marqSubMiddleTD"></td>
				  
				  <td style="font-size: 10px;">
				  '.$row['wish_date']." ".$row['wish_time'].'
				  </td>
				  
				</tr>
			  </table>
			  

		   </td>
		</tr>';
	echo '<tr style="height:20px;border-bottom:1px solid #9B9B9B">
	      <td><hr></td>
		 </tr>';
  }
echo '</table>';	
?>