<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Virgin Mary Church</title>
<link rel="stylesheet" type="text/css" href="css/styles.css"/>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<script type="text/javascript" src="js/jquery.min.js"></script>
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
		
		echo'<p id="WishingWallTitle">Wishing Wall</p>';
            echo'<div id="WishingWallBox" style="margin:0 auto;">';
	              include('phpFunctions/showWishes.php');
	
            echo'</div>';
        echo'</div>';
	   }
	   
	}
	else
	   {
	    echo'<p id="WishingWallTitle">Wishing Wall</p>';
          echo'<div id="WishingWallBox" style="margin:0 auto;overflow: auto;">';
	
	        echo'<div id="UnlogedMessage">Please Log In to Access the Wishing Wall<br/>';
			echo'New Members <a href="register.php">Register</a></div>';
	
          echo'</div>';
        echo'</div>';
	   }
?>
	


<?php include('footer.php');?>
</body>
</html>