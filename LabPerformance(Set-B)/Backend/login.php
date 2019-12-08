<?php
	session_start();
	require_once('functions.php');

	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		if(empty($username)==true || empty($password)==true)
		{
			echo "Empty Informations";
		}
		else
		{
			$count = validate($username,$password);

			if($count > 0) {
					//$user = getinfo($username);
					$_SESSION['username'] = $username;
					//$_SESSION['email'] = $user['email'];
					$_SESSION['password'] = $password;
					setcookie('username',$username,time()+3600*60,'/');
					header('location: ../frontend/dashboard.php');
			}

			else {
					echo "Invalid User";
			}
		}
	}
	else
		header('location: ../Frontend/login.php');
?>