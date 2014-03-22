<?php
include("../includes/connection.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$_SESSION["authenticated"] = 'false';
	$email = mysql_real_escape_string($_POST['email']);

	// Check for Admin
	$password = mysql_real_escape_string($_POST['password']);
	$sql = mysql_query("select * from users where email='".$email."' 
	and password ='".$password."' and status='admin'");
	$numrow = mysql_num_rows($sql);
	if($numrow == 1) {
		session_start();
        $_SESSION["authenticated"] = 'admin';
        header("Location:../index.php");
        exit;
	} 
	// Simple user
	$password = mysql_real_escape_string(md5($_POST['password']));
	$sql = mysql_query("select * from users where email='".$email."' 
	and password ='".$password."' and status='active'");
	$numrow = mysql_num_rows($sql);

	if($numrow == 1) {
		$str="Welcome to A2Z webhelp";
		session_start();
        $_SESSION["authenticated"] = 'true';
		header("Location:../index.php");
	} else {
		$error = "Sorry, Invalid login details.";
		header("Location:../pages/error.php?error=".$error);
	}
}
?>