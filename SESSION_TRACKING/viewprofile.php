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
			echo $_COOKIE['status'];
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
					<legend><b>PROFILE</b></legend>
					<form>
						<br/>
						<table cellpadding="0" cellspacing="0">
							<tr>
								<td width="10%">Name</td>
								<td>:</td>
								<td width="15%" align="left">
									<?php
										if(!empty($_SESSION))
										{
											echo $_SESSION['name']; 
										}
										else
											echo $_COOKIE['name'];
									?>
								</td>
								<td rowspan="7" align="center" width="50%">
									<img width="128" src="1.jpg"/>
									<br/>
									<a href="changeprofilepicture.php">Change</a>
								</td>
							</tr>		
							<tr><td colspan="3"><hr/></td></tr>
							<tr>
								<td>Email</td>
								<td>:</td>
								<td>
									<?php
										if(!empty($_SESSION))
										{
											echo $_SESSION['email']; 
										}
										else
											echo $_COOKIE['email'];
									?>
								</td>
							</tr>		
							<tr><td colspan="3"><hr/></td></tr>			
							<tr>
								<td>Gender</td>
								<td>:</td>
								<td>
									<?php
										if(!empty($_SESSION))
										{
											echo $_SESSION['gender']; 
										}
										else
											echo $_COOKIE['gender'];
									?>
								</td>
							</tr>
							<tr><td colspan="3"><hr/></td></tr>
							<tr>
								<td>Date of Birth</td>
								<td>:</td>
								<td>
									<?php
										if(!empty($_SESSION))
										{
											echo $_SESSION['day']."/".$_SESSION['month']."/".$_SESSION['year']; 
										}
										else
											echo $_COOKIE['day']."/".$_COOKIE['month']."/".$_COOKIE['year'];
									?>
								</td>
							</tr>
						</table>	
						<hr/>
						<a href="editprofile.php">Edit Profile</a>	
					</form>
				</fieldset>
			</td>
		</tr>
	</table>
</fieldset>
<fieldset>
    <h5 align="center">Copyright © 2017</h5>
</fieldset>
