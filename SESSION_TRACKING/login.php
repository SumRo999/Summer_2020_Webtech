<?php
    session_start();
	
	if(isset($_POST['Submit']))
	{
		$remeber_me = $_POST['remeber_me'];
		$uname = $_POST['userName'];
		$password = $_POST['password'];
		
		if(!empty($uname) && !empty($password) && isset($remeber_me))
		{
			if(isset($_COOKIE['uname']) and isset($_COOKIE['password']))
			{
				if($uname==$_COOKIE['uname'] && md5($password)==$_COOKIE['password'])
				{
					header('location:userdashboard.php');
				}
				else
					echo "Invalid username/password";
			}
		}
		else if(!empty($uname) && !empty($password))
		{
			if($uname==$_SESSION['uname'] && $password==$_SESSION['password'])
			{
				setcookie('userName',$uname,time()+6000,'/');
				setcookie('password',md5($password),time()+6000,'/');
				setcookie('name',$name,time()+6000,'/');
				setcookie('email',$email,time()+6000,'/');
				setcookie('day',$day,time()+6000,'/');
				setcookie('year',$year,time()+6000,'/');
				setcookie('month',$month,time()+6000,'/');
				setcookie('gender',$gender,time()+6000,'/');
				setcookie('status','set',,time()+6000,'/');
				session_destroy();
				header('location: userdashboard.php');
			}
			else
			{
				echo "Invalid username/password";
			}
		}
		elseif(empty($uname) || empty($password))
	    {
		    if(isset($_SESSION))
		    {
			    if($_SESSION['userName']==$uname and $_SESSION['password']==$password)
			        {
				        $_SESSION['status'] = 'set';
				        header('location:userdashboard');
			        }
			}
			else
				echo "Invalid username/password";
		}
		else
			echo "Please do your registration first";
	}
	else
	{
		header("location: login.html");
	}
?>