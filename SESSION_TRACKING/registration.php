<?php
    session_start();
	if(isset($_POST['Submit']))
	{
		$name = $_POST['name'];
		$uname = $_POST['userName'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$confirm_password = $_POST['confirmPassword'];
		$gender = $_POST['gender'];
		$day = $_POST['day'];
		$year = $_POST['year'];
		$month = $_POST['month'];
		
		if(empty($uname)||empty($password)||empty($email)||empty($confirm_password)||empty($name)||empty($gender)||empty($day)||empty($year)||empty($month))
		{
			header("location:registration.html");
		}
		else{
			if($password == $confirm_password)
			{
 
			    $_SESSION['uname'] = $uname;
			    $_SESSION['password'] = $password;
			    $_SESSION['name'] = $name;
			    $_SESSION['confirm_password'] = $confirm_password;
			    $_SESSION['email'] = $email;
			    $_SESSION['gender'] = $gender;
			    $_SESSION['day'] = $day;
			    $_SESSION['month'] = $month;
			    $_SESSION['year'] = $year;
                header("location:login.html");				
			}
			else
			{
				header("location:registration.html");
			}
		}
	}
	else
	{
		header("location:login.html");
	}
?>