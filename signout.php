<?php
session_start();

unset($_SESSION['UserInfo']);
session_destroy();
header('location:login.php');
?>
