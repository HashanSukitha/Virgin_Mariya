<?php
session_start();
//$_SESSION['logedIn'];
//$_SESSION['Name'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>House of Virgin Mary</title>
<link rel="stylesheet" type="text/css" href="css/styles.css"/>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script>
var jq = $.noConflict();
jq(document).ready(function(){
  jq("#LoginButton").click(function(){
    jq("#LoginBox").toggle('blind');
  });
});
</script>
</head>

<body>


<?php include('header.php');?>
<?php include('login.php');?>
<?php include('phpFunctions/config.php');?>

<div id="wrapper">
  
     <?php

	if(isset($_SESSION['logedIn']))
	{
	  if($_SESSION['logedIn']=='1')
	  {
	   echo '<div id="logBxesCntainer">';
			echo '<div id="showLgStusBox">
				  <form action="phpFunctions/logOutUser.php">
					Welcome'." ".$_SESSION['Name'].'<input type="submit" value="LogOut"/>
				  </form> 
				  </div>';
			echo '<div id="gtWwall">
				   <form action="writeOnWall.php">
					  Write a Wish on the Wall<input type="submit" value="Write a Wish"/>
				   </form>
				  </div>';
		echo '</div>';
	   }
	}
	?>
   
   
  <div id="MainTitle">
    <img src="images/virgin_mary.png" />
  </div>
  
  <div id="mary">
     <img src="images/mary.png" />  
  </div>
  
  <div id="Discription">
     <p>
	 In many different traditions lighting candles is a<br />
sacred action. It expresses mre than words<br />
 can express. It has to do with gratefulness.<br />
From time immemrial, people have lit candles<br />
in sacred places. Why shuld cyberspace not<br />
 be sacred? Every year millin f visitors lighting<br />
candles in house of Virgin Mary fr wishes and <br />
gratefulness. Here yu can get all information<br />
about the house of Virgin Mary and if you wish<br />
 you can light your candle and write your wishes<br />
to wishing wall.	 </p>
  </div>
  
  
  
  <div id="wishingWall">
     
	<marquee  direction="up" height="166" width="350" behavior="alternate" onmouseover="this.scrollAmount=0" onmouseout="this.scrollAmount=3" SCROLLAMOUNT=3>
	<?php include('phpFunctions/getWishiesToMarquee.php');?>
	</marquee>
  </div>

  
<div id="bannerBar">
  <a href="hollyWater.php">
  <div id="holyWater">
  </div>
  </a>
 
  <a href="lightAcandle.php">
  <div id="lightAcandleNow">
  </div>
  </a>
</div>
  <hr />
  
  <?php
    $counter = mysql_query("SELECT COUNT(*) AS id FROM vir_wishies", $link);
	$num = mysql_fetch_array($counter);
	$count = $num["id"];
     echo '<div id="NumOfWishes">
	         <p>Wishes :'." ".$count.'</p>
	       </div>';
  ?>
  <div id="WishingWallBox" style="margin: 50px auto 0;width: 97%;overflow: hidden;">
  <?php
    $result = mysql_query("SELECT vir_user.u_name,vir_wishies.wish_date,vir_wishies.wish_time,vir_wishies.wish 
						FROM vir_user 
						INNER JOIN vir_wishies
						on vir_user.u_id=vir_wishies.u_id
						where ` wish_id` <(SELECT COUNT(*) AS id FROM vir_wishies)
						ORDER BY RAND()
						LIMIT 8", $link);
						
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
  </div>
  
</div>

<?php include('footer.php');?>

</body>
</html>
