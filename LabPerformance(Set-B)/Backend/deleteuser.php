<?php
	require_once('functions.php');
	$username = $_REQUEST['username'];
	if(isset($username))
	{
		$count = deleteuser($username);
		if($count)
		{
			header('location: ../frontend/userlist.php');
		}
		else
			header('location: ../frontend/userlist.php');
	}
?>