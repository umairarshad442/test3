<?php
session_start();
if(!(isset($_SESSION["user"]) and $_SESSION["user"] == true)){
header("Location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>hello</h2><br>
<a href="logout.php">logout</a>
</body>
</html>