<?php
	session_start();
	require_once('functions.php');

	if (isset($_POST['add'])) {
		$username = $_POST['username'];
		$name = $_POST['name'];
		$cName=$_POST['cName'];
		$con=$_POST['con'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		if(empty($username)==true || empty($password)==true || empty($email)==true)
		{
			echo "Empty Informations";
		}
		else
		{
			$count = Register($username, $name, $email, $con, $cName, $password);

			if(!$count) {
				header('location: ../Frontend/reg.php');
			}

			else {
				header('location: ../Frontend/dashboard.php');
			}
		}
	}
	else
		header('location: ../Frontend/login.php');
?>