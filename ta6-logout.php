<?php 
	session_start();

	session_destroy();
	header("location: ta6-login.php");
?>