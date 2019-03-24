<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<?php
$_SESSION["myname"] = "umair";
echo "my name is" .' '. $_SESSION['myname'];
?>
</html>