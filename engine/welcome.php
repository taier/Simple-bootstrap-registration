<?php
include("../includes/authentication.php");

function getLoginRole() {
	$role = "";
	switch (checkAuth()) {
	case 0:
		$role = "Guest";
		break;
	case 1:
		$role = "User";
		break;
	case 999:
		$role = "Admin";
		break;
	
	default:
		$role = "Guest";
		break;
	}

	return $role;	
}

