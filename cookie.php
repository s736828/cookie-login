<h1>cookie</h1>
<?php
date_default_timezone_set("Asia/Taipei");
//設定cookie
// setcookie('name','mack',60);
// setcookie('name','mack',time()+60);
setcookie('name','mack',strtotime("2023-05-25 10:48:00"));
//改上面這段寫死的分鐘下去測cookie

echo $_COOKIE['name'];
?>