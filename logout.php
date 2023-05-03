<?php
include_once('comm.php');

// session_start();
// echo "已登出使用者". $_SESSION['name'];

// unset($_SESSION['name']);


unset($_SESSION['error']);
unset($_SESSION['login']);

header("location:login.php");
?>