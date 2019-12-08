<?php
	session_start();
	require_once('functions.php');

	if(isset($_POST['save'])){
		$Title = $_POST['title'];
		$Company = $_POST['company'];
		$Location = $_POST['loc'];
		$Salary = $_POST['sal'];
		if(empty($Title)==true || empty($Company)==true || empty($Location)==true || empty($Salary)==true)
		{
			echo "Empty Informations";
		}
		else
		{
			$count = updateJob($Title, $Company, $Location, $Salary);

			if(!$count) {
				header('location: ../Frontend/editjob.php');
			}

			else {
				header('location: ../Frontend/joblist.php');
			}
		}
	}

	else
		header('location: ../Frontend/login.php');
?>