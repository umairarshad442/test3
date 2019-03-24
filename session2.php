<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<?php
echo "my name is" .' '. $_SESSION["myname"];
?>
</html>