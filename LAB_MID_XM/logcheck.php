<?php
	session_start();

	if(isset($_POST['Login'])){

		$userId 		= $_POST['userId'];
		$password 	= $_POST['password'];

		if(empty($userId) || empty($password)){
			echo "null submission";

		}else{
			
			$file = fopen('user.txt', 'r');
			$data = fread($file, filesize('user.txt'));
			$user = explode('|', $data);

			while(!feof($data)){
				$user = fgets($data);
				$user = explode('|', $data);
				if(trim($user[0]) == $userId && trim($user[1]) == $password){
				$_SESSION['status']  = "Ok";
				header('location:home.php');
			    }
				else
				{
				    echo "Invalid userId/password";
			    }
			}


		}

	}else{
		header("location:login.html");
	}
?>