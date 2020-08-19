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
	<title>Delete Company</title>
</head>
<body>

	<form action="../php/companyController.php" method="post">
		<fieldset>
			<legend>Delete Company</legend>
			<table>
				<tr>
					<td>
						Do you want to delete for sure?(to delete press yes and not to delete press no)
						<input type="submit" name="yes" value="yes"> 
						<input type="submit" name="no" value="no"> 
					</td>
				</tr>
				<tr>
					<td>
						<input type="hidden" name="id" value="<?=$user['id']?>">
						<a href="all_company.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>