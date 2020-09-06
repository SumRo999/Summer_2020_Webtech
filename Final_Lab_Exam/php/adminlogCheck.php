<?php
	session_start();
	require_once('../php/session_header.php');
	require_once('../service/userService.php');

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if(empty($username) || empty($password)){
			header('location: ../views/adminlogin.php?error=null_value');
		}else{

			$admin = [
				'username'=>$username,
				'password'=>$password,
			];
			
			$status = validate($admin);

			if($status){
				$_SESSION['username'] = $username;
				header('location: ../views/home.php');
			}else{
				header('location: ../views/adminlogin.php?error=invalid_user');
			}
		}
	}
?>