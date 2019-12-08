<?php
	require_once('functions.php');

	if (isset($_POST['add'])) {
		$ComName = $_POST['cname'];
		$Title = $_POST['title'];
		$Location=$_POST['loc'];
		$Salary=$_POST['salary'];
		if(empty($ComName)==true || empty($Title)==true || empty($Location)==true|| empty($Salary)==true)
		{
			echo "Empty Informations";
		}
		else
		{
			$count = jobReg($ComName, $Title, $Location, $Salary);

			if(!$count) {
				header('location: ../Frontend/job.php');
			}

			else {
				header('location: ../Frontend/dashboard.php');
			}
		}
	}
	else
		header('location: ../Frontend/login.php');
?>