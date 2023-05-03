<?php
// echo $_COOKIE['name'];

session_start(); //使用session的時候，要先加上session_start()

echo $_SESSION['name'];
?>