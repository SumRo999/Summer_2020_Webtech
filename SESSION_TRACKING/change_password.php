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
					<legend><b>CHANGE PASSWORD</b></legend>
					<form method="post">
						<table>
							<tr>
								<td><font size="3">Current Password</font></td>
								<td>:</td>
								<td><input type="password" name="password" /></td>
								<td></td>
							</tr>
							<tr>
								<td><font size="3" color="green">New Password</font></td>
								<td>:</td>
								<td><input type="password" name="n_password"/></td>
								<td></td>
							</tr>
							<tr>
								<td><font size="3" color="red">Retype New Password</font></td>
								<td>:</td>
								<td><input type="password" name="re_n_password" /></td>
								<td></td>
							</tr>
						</table>
						<hr />
						<input type="submit" name="Submit" value="Submit" />
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
            if($_SESSION['password']==$_POST['password'])
            {
                if($_POST['n_password']==$_POST['re_n_password'])
                {
                    $_SESSION['password']=$_POST['n_password'];
                }
                else
                    echo "Try again using correct info!";
            }
            else
                echo "Try again using correct info!";
        }
        elseif(!empty($_COOKIE['password']))
        {
            if($_COOKIE['password']==md5($_POST['password']))
            {
                if($_POST['n_password']==$_POST['re_n_password'])
                {
                    setcookie('password',$_POST['n_password'],time()+36000,'/');
                    echo "Password Changed!";
                }
                else
                    echo "Try again using correct info!";
            }
            else
                echo "Try again using correct info!";
        }
    }
    
?>