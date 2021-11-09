<?php session_start();

//$con=mysqli_connect("localhost","root","","virgin_mariya");
include('config.php');
// Check connection

	$wish=$_POST['wish'];


if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  

$the_time = date('G:ia');

$sql="INSERT INTO vir_wishies (u_id,wish_date,wish_time,wish) VALUES('".$_SESSION['UserId']."','".date("Y-m-d")."','".$the_time."','".$wish."')";


if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";
header("Location: ../writeOnWall.php");

mysqli_close($con);


 ?>