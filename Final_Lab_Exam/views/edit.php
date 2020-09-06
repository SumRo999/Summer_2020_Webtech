<?php
	require_once('../php/session_header.php');
	require_once('../service/userService.php');

	if (isset($_GET['id'])) {
		$user = getByID($_GET['id']);	
	}else{
		header('location: all_author.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Author</title>
</head>
<body>

	<form action="../php/userController.php" method="post">
		<fieldset>
			<legend>Edit Author</legend>
			<table>
				<tr>
					<td>Author Name</td>
					<td><input type="text" name="authorname" value="<?=$author['authorname']?>"></td>
				</tr>
				<tr>
					<td>Contact Number</td>
					<td><input type="text" name="contactnumber" value="<?=$author['contactnumber']?>"></td>
				</tr>
				<tr>
					<td>User Name</td>
					<td><input type="text" name="username" value="<?=$author['username']?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="<?=$author['password']?>"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="hidden" name="id" value="<?=$author['id']?>">
						<input type="submit" name="edit" value="Update"> 
						<a href="all_author.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>