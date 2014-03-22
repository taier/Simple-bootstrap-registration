<?php 
session_start();

function checkAuth() {
	if(empty($_SESSION["authenticated"]) || $_SESSION["authenticated"] == 'false') {
		return 0;
	} else if ($_SESSION["authenticated"] == 'true') {
		return 1;
	} else if ($_SESSION["authenticated"] == 'admin') {
		return 999;
	}
}

?>