<?php
	require_once('../php/session_header.php');
	require_once('../service/companyService.php');

	if (isset($_GET['id'])) {
		$user = getByID($_GET['id']);	
	}else{
		header('location: all_company.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Company</title>
</head>
<body>

	<form action="../php/companyController.php" method="post">
		<fieldset>
			<legend>Edit Company</legend>
			<table>
				<tr>
					<td>Company Name</td>
					<td><input type="text" name="company_name" value="<?=$user['company_name']?>"></td>
				</tr>
				<tr>
					<td>Profile Description</td>
					<td><input type="text" name="profile_description" value="<?=$user['profile_description']?>"></td>
				</tr>
				<tr>
					<td>Industry</td>
					<td><input type="text" name="industry" value="<?=$user['industry']?>"></td>
				</tr>
				<tr>
					<td>Company website</td>
					<td><input type="text" name="company_website" value="<?=$user['company_website']?>"></td>
				</tr>
				<tr>
					<td>Company logo</td>
					<td><input type="text" name="company_logo" value="<?=$user['company_logo']?>"></td>
				</tr>
				<tr>
					<td>User Account Id</td>
					<td><input type="text" name="user_account_id" value="<?=$user['user_account_id']?>"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="hidden" name="id" value="<?=$user['id']?>">
						<input type="submit" name="edit" value="Update"> 
						<a href="all_company.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>