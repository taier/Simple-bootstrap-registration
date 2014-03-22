<?php
include("../includes/connection.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$fname = mysql_real_escape_string($_POST['fname']);
	$lname = mysql_real_escape_string($_POST['lname']);
	$email = mysql_real_escape_string($_POST['email']);
	$password = mysql_real_escape_string(md5($_POST['password']));
	$password2 = mysql_real_escape_string(md5($_POST['password2']));
	$status='active';

	if($password == $password2) {
		mysql_query("insert into users set fname = '".$fname."',
			lname = '".$lname."',
			email = '".$email."',
			password = '".$password."',
			status = '".$status."'");
		$iduser = mysql_insert_id();
		session_start();
        $_SESSION["authenticated"] = 'true';
		header("Location:../index.php");
	} else {
		$error = "Passowrds do not match";
		header("Location:../pages/error.php?error=".$error);
	}
}
?>