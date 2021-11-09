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
  <p id="regTitle">Soon you can get HOLLY WATER from House of Virgin Mary </p>
  <div id="HollyWterBox">
  <img src="images/water.jpg" />
  </div>
</div>

<?php include('footer.php');?>

</body>
</html>