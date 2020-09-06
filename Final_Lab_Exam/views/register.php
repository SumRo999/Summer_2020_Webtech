<?php

	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error')
		{
			echo "Something went wrong...please try again";
		}
		elseif($_GET['error'] == 'id_already_exist')
		{
			echo "this id already exist";
		}
		else
			echo "null submission";	
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
</head>
<body>

	<form id="form">
		<fieldset>
			<legend>SignUp</legend>
			<table>
				<tr>
					<td>ID</td>
					<td><input type="text" id="id" name="id"></td>
					<td></td>
				</tr>
				<tr>
					<td>Author Name</td>
					<td><input type="text" id="authorname" name="authorname"></td>
					<td></td>
				</tr>
				<tr>
					<td>Contact Number</td>
					<td><input type="text" id="contactnumber" name="contactnumber"></td>
					<td></td>
				</tr>
				<tr>
					<td>User Name</td>
					<td><input type="text" id="username" name="username"></td>
					<td></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" id="password" name="password"></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="button" id="submit" name="submit" value="submit" onclick="submitvalue()">
						<a href="../views/login.php" id="login" style="display: none">Login</a>
					</td>
					<td id="show2"></td>
				</tr>
			</table>
		</fieldset>
	</form>
	<script type="text/javascript">
		
		var decision = false;
		var show1 = document.getElementById("show1");

		function submitvalue()
		{
			var show2 = document.getElementById("show2");
			if(decision == true)
			{
				var id = document.getElementById('id').value;
				var authorname = document.getElementById('authorname').value;
				var contactnumber = document.getElementById('contactnumber').value;
				var username = document.getElementById('username').value;
				var password = document.getElementById('password').value;
				var submit = document.getElementById('submit').value;
				if(id!="" && authorname!="" && contactnumber!="" && username!="" && password!="")
				{
					var xhttp = new XMLHttpRequest();
					xhttp.open('POST', '../php/regCheck.php', true);
					xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
					xhttp.send('id='+id+'&authorname='+authorname+'&contactnumber='+contactnumber+'&username='+username+'&password='+password+'&submit='+submit);

					xhttp.onreadystatechange = function ()
					{
						if(this.readyState == 4 && this.status == 200)
						{
							if(this.responseText != "")
							{
								document.getElementById('form').reset();
								document.getElementById('login').style.display = 'inline'
							}
							else
							{
								document.getElementById('searchdata').innerHTML = "";
							}	
						}	
					}
				}
				else
				{
					show2.innerHTML = "please fill all the information correctly";
				}
			}
			else
			{
				show2.innerHTML = "please fill all the information correctly";
			}
			
		}
	</script>
</body>
</html>