<?php
session_start();
if(isset($_SESSION['logedIn']))
{
  unset($_SESSION['logedIn']);
  unset($_SESSION['Name']);
  unset($_SESSION['UserId']);
  
  header("Location: ../index.php");
  }
?> 