<?php 
session_start();
session_destroy();
header("Location:login.php");
// header("location:login.php");
 ?>