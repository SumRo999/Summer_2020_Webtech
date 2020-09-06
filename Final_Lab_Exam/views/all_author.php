<?php
	require_once('../php/session_header.php');
	require_once('../service/userService.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Author List</title>
</head>
<body>

	<a href="adminhome.php">Back</a> |
	<a href="../php/adminlogout.php">Logout</a> 
	
	<h3>Author list</h3>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>Author Name</td>
			<td>Contact Number</td>
			<td>User Name</td>
			<td>Password</td>
			<td>Action</td>
		</tr>

		<?php  
			$author = getAllUser();
			for ($i=0; $i != count($author); $i++) {  ?>
		<tr>
			<td><?=$author[$i]['id']?></td>
			<td><?=$author[$i]['authorname']?></td>
			<td><?=$author[$i]['contactnumber']?></td>
			<td><?=$author[$i]['username']?></td>
			<td><?=$author[$i]['password']?></td>
			<td>
				<a href="edit.php?id=<?=$author[$i]['id']?>">Edit</a> |
				<a href="delete.php?id=<?=$author[$i]['id']?>">Delete</a> 
			</td>
		</tr>

		<?php } ?>
		
	</table>
</body>
</html>