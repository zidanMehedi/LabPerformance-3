<?php
	session_start();
	require_once('functions.php');

	if(isset($_POST['save'])){
		$username = $_POST['username'];
		$email = $_POST['email'];
		if(empty($username)==true || empty($email)==true)
		{
			echo "Empty Informations";
		}
		else
		{
			$count = update($username, $email);

			if(!$count) {
				header('location: ../frontend/edituser.php');
			}

			else {
				header('location: ../frontend/userlist.php');
			}
		}
	}

	else
		header('location: ../frontend/index.php');
?>