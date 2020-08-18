<?php 
	session_start();
	require_once('../php/session_header.php');
	require_once('../service/userService.php');


	//add user
	if(isset($_POST['create'])){
		$username 	= $_POST['username'];
		$id 	= $_POST['id'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];

		if(empty($username) || empty($password) || empty($email) || empty($id)){
			header('location: ../views/register.php?error=null_value');
		}else{

			$user = [
				'username'=> $username,
				'id'=> $id,
				'password'=> $password,
				'email'=> $email
			];

			$status = insert($user);

			if($status){
				header('location: ../views/all_users.php?success=done');
			}else{
				header('location: ../views/create.php?error=db_error');
			}
		}
	}

	//delete user
	if(isset($_POST['yes'])){
		$id 	= $_POST['id'];
		$status = delete($id);

		if($status){
			header('location: ../views/all_users.php?success=done');
		}
	}elseif(isset($_POST['no'])){
		header('location: ../views/all_users.php?');
	}
	

	//update user
	if(isset($_POST['edit'])){

		$username 	= $_POST['username'];
		$id 		= $_POST['id'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];

		if(empty($username) || empty($password) || empty($email) || empty($id)){
			header('location: ../views/edit.php?id={$id}');
		}else{

			$user = [
				'username'=> $username,
				'id'=> $id,
				'password'=> $password,
				'email'=> $email
			];

			$status = update($user);

			if($status){
				header('location: ../views/all_users.php?success=done');
			}else{
				header('location: ../views/edit.php?id={$id}');
			}
		}
	}

?>