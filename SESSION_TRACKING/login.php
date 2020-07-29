<?php
    session_start();
	
	if(isset($_POST['Submit']))
	{
		$uname = $_POST['userName'];
		$password = $_POST['password'];
		if(!empty($uname) && !empty($password) && isset($_POST['remember_me']))
		{
			if(isset($_COOKIE['userName']) && isset($_COOKIE['password']))
			{
				
				if($uname==$_COOKIE['userName'] && md5($password)==$_COOKIE['password'])
				{
					header('location:userdashboard.php');
				}
				else
					echo "Invalid username/password1";
			}
		    elseif(!empty($_SESSION['userName']) && !empty($_SESSION['password']))
		    {
				if($uname==$_SESSION['userName'] && $password==$_SESSION['password'])
				{
					setcookie('userName',$uname,time()+6000,'/');
					setcookie('password',md5($password),time()+6000,'/');
					setcookie('name',$name,time()+6000,'/');
					setcookie('email',$email,time()+6000,'/');
					setcookie('day',$day,time()+6000,'/');
					setcookie('year',$year,time()+6000,'/');
					setcookie('month',$month,time()+6000,'/');
					setcookie('gender',$gender,time()+6000,'/');
					setcookie('status','set',time()+6000,'/');
					session_destroy();
					header('location:userdashboard.php');
				}
				else
				{
					echo "Invalid username/password2";
				}
			}
			else
				echo "Invalid username/password3";
			
		}
		elseif(!empty($uname) && !empty($password))
	    {
		    if(!empty($_SESSION))
		    {
			    if($_SESSION['userName']==$uname and $_SESSION['password']==$password)
			    {
				    $_SESSION['status'] = 'set';
				    header('location:userdashboard.php');
			    }
				else
				{
					"Invalid username/password4";
				}
			}
			else
				echo "Please do your registration first";
		}
		else
			echo "Put your username and password";
	}
	else
	{
		header("location:login.html");
	}
?>