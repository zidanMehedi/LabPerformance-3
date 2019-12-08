<?php
	require_once('functions.php');
	$Title = $_REQUEST['title'];
	if(isset($Title))
	{
		$count = deletejob($Title);
		if($count)
		{
			header('location: ../Frontend/joblist.php');
		}
		else
			header('location: ../Frontend/joblist.php');
	}
?>