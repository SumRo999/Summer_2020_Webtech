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
			    <?php
				    if(!empty($_SESSION))
					{
						echo "Welcome ".$_SESSION['userName']; 
					}
					else
						echo "Welcome ".$_COOKIE['userName'];
				?>
			</td>
		</tr>
	</table>
</fieldset>
<fieldset>
    <h5 align="center">Copyright © 2017</h5>
</fieldset>