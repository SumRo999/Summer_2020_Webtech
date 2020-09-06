<?php
	session_start();

	if(!isset($_SESSION['username'])){
		header('location: ../views/adminlogin.php?error=invalid_request');
		header('location: ../views/authorlogin.php?error=invalid_request');
	}
?>