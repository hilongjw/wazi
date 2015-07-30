<?php
$host="localhost";
$db_user="root";
$db_pass="root";
$db_name="wazi";
$timezone="Asia/Shanghai";

$con=mysql_connect($host,$db_user,$db_pass);
mysql_select_db($db_name,$con);
mysql_query("SET names UTF8");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

header("Content-Type: text/html; charset=utf-8");
date_default_timezone_set($timezone); //北京时间
?>