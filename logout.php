<?php
session_start();
unset($_SESSION["username"]);
$_SESSION['username'] = "";
header('location:login.html');
?>