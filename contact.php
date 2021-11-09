<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Virgin Mary Church</title>
<link rel="stylesheet" type="text/css" href="css/styles.css"/>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
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
  <p id="ContactTitle">Contact Form</p>
  <div id="ContactForm">
    <form action="" name="regForm">
     <table>
	   <tr>
	      <td>Name</td>
		  <td><input class="txtBoxes" type="text" name="ContactName"/></td>
	   </tr>
	   
	   <tr>
	     <td>E-mail</td>
		 <td><input class="txtBoxes" type="text" name="ContactMail"/></td>
	   </tr>
	   
	   <tr>
	     <td>Regarding:</td>
		 <td><input class="txtBoxes" type="text" name="ContactRegarding"/></td>
	   </tr>
	   
	   <tr>
	     <td>Regarding:</td>
		 <td><textarea class="txtBoxes" rows="4" cols="50" name="ContactMessage"></textarea> </td>
	   </tr>
	   
	   <tr>
	     <td></td>
		 <td><input class="btn" type="submit" name="Newsubmit" value="Register"/></td>
	   </tr>
	   
	 </table>
  </form>
  </div>
</div>

<?php include('footer.php');?>

</body>
</html>