<?php 
session_start();

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form  method="post" >
	<input type="text" name="name" placeholder="name">
	<input type="text" name="email" placeholder="emai">
	<input type="password" name="psd" placeholder="password">
	<input type="submit" name="submit">

</form>
</body>
</html>
<?php

//session_start();
$VEmail = "umair.arshad442@gmail.com";
$Vpsd ="123";
//$name = isset($_POST['name'] ? $_POST['name'] : null);
 $email = (isset($_POST["email"])) ? $_POST["email"] : null;
 $password = (isset($_POST["psd"])) ? $_POST["psd"] : null;
 $name =(isset($_POST["name"])) ? $_POST["name"] : null;

 if($VEmail == $email and $Vpsd == $password) 
 {
 	$_SESSION["user"] =  true;

 	header("location:welcome.php");
 	exit();
 }
 else
 {
 	echo"please enter the correct username and password";
 }
 ?>