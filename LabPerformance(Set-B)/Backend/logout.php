<?php
	session_destroy();
	setcookie('username', $username, time()-1,'/');
	header('location: ../frontend/login.php');
?>