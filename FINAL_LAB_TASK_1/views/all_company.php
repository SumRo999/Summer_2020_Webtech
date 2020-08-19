<?php
	require_once('../php/session_header.php');
	require_once('../service/companyService.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Company List</title>
</head>
<body>

	<a href="home.php">Back</a> |
	<a href="../php/logout.php">Logout</a> 
	
	<h3>Company list</h3>

	<table border="1">
		<tr>
			<td>Id</td>
			<td>Company Name</td>
			<td>Profile Description</td>
			<td>Industry</td>
			<td>Company Website</td>
			<td>Company Logo</td>
			<td>User Account Id</td>
			<td>Action</td>
		</tr>

		<?php  
			$users = getAllUser();
			for ($i=0; $i != count($users); $i++) {  ?>
		<tr>
			<td><?=$users[$i]['id']?></td>
			<td><?=$users[$i]['company_name']?></td>
			<td><?=$users[$i]['profile_description']?></td>
			<td><?=$users[$i]['industry']?></td>
			<td><?=$users[$i]['company_website']?></td>
			<td><?=$users[$i]['company_logo']?></td>
			<td><?=$users[$i]['user_account_id']?></td>
			<td>
				<a href="edit_company.php?id=<?=$users[$i]['id']?>">Edit</a> |
				<a href="delete_company.php?id=<?=$users[$i]['id']?>">Delete</a> 
			</td>
		</tr>

		<?php } ?>
		
	</table>
</body>
</html>