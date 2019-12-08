<?php
	require_once('dbcon.php');


	function validate($username, $password)
	{
		$conn = getConnection();
		$sql = "select * from emp where username='{$username}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);

		return count($user);
	}

	function Register($username, $name, $email, $con, $cName, $password)
	{
		$conn = getConnection();
		$sql = "insert into emp values('{$username}','{$name}','{$email}','{$con}','{$cName}','{$password}',0)";
		if(mysqli_query($conn, $sql)){
			return true;
		}
		else
			return false;
	}

	function jobReg($ComName, $Title, $Location, $Salary)
	{
		$conn = getConnection();
		$sql = "insert into job values('{$ComName}','{$Title}','{$Location}','{$Salary}')";
		if(mysqli_query($conn, $sql)){
			return true;
		}
		else
			return false;
	}


	function getuser()
	{
		$conn = getConnection();
		$sql = "select * from emp";
		$result = mysqli_query($conn, $sql);
		while($user = mysqli_fetch_assoc($result))
		{
			$users[] = $user;
		}

		return $users;
	}

	function details($username)
	{
		$conn = getConnection();
		$sql = "select * from emp where username='{$username}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);

		return $user;
	}

	function joblist()
	{
		$conn = getConnection();
		$sql = "select * from job";
		$result = mysqli_query($conn, $sql);
		while($job = mysqli_fetch_assoc($result))
		{
			$jobs[] = $job;
		}

		return $jobs;
	}

	function checkrole($username)
	{
		$conn = getConnection();
		$sql = "select * from emp where username='{$username}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);

		return $user;
	}

	function getinfo($username)
	{
		$conn = getConnection();
		$sql = "select * from emp where username='{$username}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);

		return $user;
	}

	function jobinfo($Title)
	{
		$conn = getConnection();
		$sql = "select * from job where title='{$Title}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);

		return $user;
	}

	function deleteuser($username)
	{
		$conn = getConnection();
		$sql = "delete from emp where username='{$username}'";
		if(mysqli_query($conn, $sql)){
			return true;
		}
		else
			return false;
	}
	
	function update($username, $email)
	{
		$conn = getConnection();
		$sql = "update emp set email='{$email}' where username='{$username}'";
		if(mysqli_query($conn, $sql)){
			return true;
		}
		else
			return false;
	}

	function updateJob($Title, $ComName, $Location, $Salary)
	{
		$conn = getConnection();
		$sql = "update job set ComName='{$ComName}', location='{$Location}', salary='{$Salary}' where username='{$username}'";
		if(mysqli_query($conn, $sql)){
			return true;
		}
		else
			return false;
	}

?>