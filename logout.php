<?php
session_destroy();
echo '<script type="text/JavaScript">alert("success!")</script>';
header("Location:home.php");
exit();
?>