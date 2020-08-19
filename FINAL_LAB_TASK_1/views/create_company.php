<?php
	require_once('../php/session_header.php');
	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error'){
			echo "Something went wrong...please try again";
		}
		elseif($_GET['error'] == 'i')
		{
			echo "This id already exists";
		}
		elseif($_GET['error'] == 'null_value') 
		{
			echo "null submit";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Company Information</title>
</head>
<body>

	<form action="../php/companyController.php" method="post">
		<fieldset>
			<legend>Create New Company</legend>
			<table>
				<tr>
					<td>Id</td>
					<td><input type="text" name="id"></td>
				</tr>
				<tr>
					<td>Company Name</td>
					<td><input type="text" name="company_name"></td>
				</tr>
				<tr>
					<td>Profile Description</td>
					<td><input type="text" name="profile_description"></td>
				</tr>
				<tr>
					<td>Industry</td>
					<td><input type="text" name="industry"></td>
				</tr>
				<tr>
					<td>Company website</td>
					<td><input type="text" name="company_website"></td>
				</tr>
				<tr>
					<td>Company logo</td>
					<td><input type="text" name="company_logo"></td>
				</tr>
				<tr>
					<td>User Account Id</td>
					<td><input type="text" name="user_account_id"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="create" value="Create"> 
						<a href="home.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>