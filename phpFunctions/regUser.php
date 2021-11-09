<?php
//$con=mysqli_connect("localhost","root","","virgin_mariya");
include('config.php');
// Check connection

	$n=$_POST['NewName'];
	$Sn=$_POST['NewSurname'];
	$Un=$_POST['NewUsername'];
	$pwd=$_POST['NewPassword'];
	$Umail=$_POST['NewMail'];


if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  

$sql="INSERT INTO vir_user (u_name,u_Sname,u_Uname,u_pwd,u_mail) VALUES('".$n."','".$Sn."','".$Un."','".$pwd."','".$Umail."')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";
header("Location: ../index.php");

mysqli_close($con);
?> 