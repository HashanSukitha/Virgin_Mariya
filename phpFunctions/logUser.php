<?php
session_start();
include('config.php');

	$Un=$_POST['Uname'];
	$Upwd=$_POST['Upwd'];



//========================================================================================  
//$link = mysql_connect("localhost", "root", "");
//mysql_select_db("virgin_mariya", $link);

$result = mysql_query("SELECT * FROM vir_user WHERE u_Uname='".$Un."' and u_pwd='".$Upwd."'", $link);
$info = mysql_fetch_array( $result );
$num_rows = mysql_num_rows($result);

//========================================================================================  

if($num_rows==1)
{
$_SESSION['Name']=$info['u_name'];
$_SESSION['UserId']=$info['u_id'];

header("Location: ../writeOnWall.php");
}
else
{
echo "Wrong Username or Password";
}
mysqli_close($con);
?> 