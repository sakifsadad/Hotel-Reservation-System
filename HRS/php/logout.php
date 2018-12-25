<?php
session_start();
unset($_SESSION['uname']);
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/login.php");
?>
