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
  <p id="regTitle">NEW MEMBER</p>
 <!-- <div id="regForm">-->
  <div id="ContactForm">
    <form action="phpFunctions/regUser.php" method="post">
     <table>
	   <tr>
	      <td>Name</td>
		  <td><input type="text" name="NewName"/></td>
	   </tr>
	   
	   <tr>
	      <td>Surname</td>
		  <td><input type="text" name="NewSurname"/></td>
	   </tr>
	   
	   <tr>
	     <td>Username</td>
		 <td><input type="text" name="NewUsername"/> Min 3 char</td>
	   </tr>
	   
	   <tr>
	     <td>Password</td>
		 <td><input type="text" name="NewPassword"/></td>
	   </tr>
	   
	   <tr>
	     <td>Re-enter Password</td>
		 <td><input type="text" name="Re-enter"/></td>
	   </tr>
	   
	   <tr>
	     <td>E-mail</td>
		 <td><input type="text" name="NewMail"/></td>
	   </tr>
	   
	   <tr>
	     <td></td>
		 <td><input type="submit" name="Newsubmit" value="Register"/></td>
	   </tr>
	   
	 </table>
  </form>
  </div>
  <p style="margin:0;padding: 10px; text-align:center;">Member will not share your information strictly. All information is protected by the website manager. </p>
</div>

<?php include('footer.php');?>

</body>
</html>