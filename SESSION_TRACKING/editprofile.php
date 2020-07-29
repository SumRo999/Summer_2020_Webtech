<?php
    session_start();
	if(!empty($_SESSION))
	{
		if(empty($_SESSION['status']))
		{
			header('location:login.html');
		}
	}
	else
	{
		if(empty($_COOKIE['status']))
		{
			header('location:login.html');
		}
	}
?>
<!DOCKTYPE html>
<fieldset>
    <h1>X-Company</h1>
	<?php
	    if(!empty($_SESSION))
		{
			echo "<p align='right'> Logged in as <a href='profiledashboard.html'>".$_SESSION['userName']."</a>|<a href = 'logout.php'>Logout</a></p>";
		}
		else
			echo "<p align='right'> Logged in as <a href='profiledashboard.html'>".$_COOKIE['userName']."</a>|<a href = 'logout.php'>Logout</a></p>";
	?>
</fieldset>
<fieldset>
    <table width="100%" border="">
	    <tr>
		    <td rowspan="8" width="20%">
			    Account<hr/>
				<ul>
				    <li><a href = "userdashboard.php">Dashboard</a></li>
					<li><a href = "viewprofile.php">View Profile</a></li>
					<li><a href = "editprofile.php">Edit Profile</a></li>
					<li><a href = "changeprofilepicture.php">Change Profile Picture</a></li>
					<li><a href = "change_password.php">Change Password</a></li>
					<li><a href = "logout.php">Logout</a></li>
				</ul>
			</td>
			<td rowspan="8">
			    <fieldset>
					<legend><b>EDIT PROFILE</b></legend>
					<form method="post">
						<br/>
						<table cellpadding="0" cellspacing="0">
							<tr>
								<td width="20%">Name</td>
								<td>:</td>
								<td width="70%" align="left">
									<input type="text" name="name">
								</td>
							</tr>		
							<tr><td colspan="3"><hr/></td></tr>
							<tr>
								<td>Email</td>
								<td>:</td>
								<td>
									<input type="text" name="email">
								</td>
							</tr>		
							<tr><td colspan="3"><hr/></td></tr>			
							<tr>
								<td>Gender</td>
								<td>:</td>
								<td>
									<input name="gender" type="radio" value="Male">Male
									<input name="gender" type="radio" value="Female">Female
									<input name="gender" type="radio" value="Other">Other
								</td>
							</tr>
							<tr><td colspan="3"><hr/></td></tr>
							<tr>
								<td>Date of Birth</td>
								<td>:</td>
								<td>
									<input type="text" name="date"><br/>
									dd/mm/yyyy
								</td>
							</tr>
						</table>	
						<hr/>
						<input type="submit" value="Submit" name="Submit">
						
					</form>
				</fieldset>
				</td>
		</tr>
	</table>
</fieldset>
<fieldset>
    <h5 align="center">Copyright © 2017</h5>
</fieldset>
<?php
	if(isset($_POST['Submit']))
	{
		if(!empty($_SESSION))
		{
			if(!empty($_SESSION['status']))
			{
				$_SESSION['name'] = $_POST['name'];
				$_SESSION['email'] = $_POST['email'];
				$_SESSION['gender'] = $_POST['gender'];
				$dmy=explode('/',$_POST['date']);
				$_SESSION['day'] = $dmy['0'];
				$_SESSION['month'] = $dmy['1'];
				$_SESSION['year'] = $dmy['2'];
			}
		}
		else
		{
			if(!empty($_COOKIE['status']))
			{
				setcookie('name',$_POST['name'],time()+6000,'/');
				setcookie('email',$_POST['email'],time()+6000,'/');
				setcookie('gender',$_POST['gender'],time()+6000,'/');
				$dmy=explode('/',$_POST['date']);
				setcookie('day',$dmy['0'],time()+6000,'/');
				setcookie('year',$dmy['1'],time()+6000,'/');
				setcookie('month',$dmy['2'],time()+6000,'/');
				
			}
		}
	}
?>