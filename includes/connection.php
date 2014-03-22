<?php
$host="";
$uname="";
$pass="";
$database = "";
$error = "";

$connection=mysql_connect($host,$uname,$pass);
if(!$connection) {
	$error = "Database Connection Failed";
	header("Location:../pages/error.php?error=".$error);
	exit;
}

$selectdb=mysql_select_db($database);
if(!$selectdb) {
	$error = "Database could not be selected";
	header("Location:../pages/error.php?error=".$error);
	exit;
}

$result=mysql_select_db($database);
if(!$result) {
	$error = "database cannot be selected";
	header("Location:../pages/error.php?error=".$error);
	exit;
} 

@session_start();
set_time_limit(0);
?>