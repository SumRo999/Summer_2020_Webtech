<?php
	session_start();
	session_destroy();

	setcookie('userName',$_SESSION['userName'],time()-6000,'/');
	setcookie('password',md5($_SESSION['password']),time()-6000,'/');
	setcookie('name',$_SESSION['name'],time()-6000,'/');
	setcookie('email',$_SESSION['email'],time()-6000,'/');
	setcookie('gender',$_SESSION['gender'],time()-6000,'/');
	setcookie('day',$_SESSION['day'],time()-6000,'/');
	setcookie('month',$_SESSION['month'],time()-6000,'/');
	setcookie('year',$_SESSION['year'],time()-6000,'/');
	setcookie('status',"set",time()-6000,'/');
	header('location:home.html');

?>