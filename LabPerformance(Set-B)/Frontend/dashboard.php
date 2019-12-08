<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<center>
		<h1>Welcome <?= $_COOKIE['username']?></h1>
		<?php
			require_once('../Backend/functions.php');
			$user = checkrole($_COOKIE['username']);

			if($user['type']==1) {
		?>
			<table>
				<tr>
					<td>
						<input type="text" id="box" onkeyup="loadDoc()">
					</td>
					<td>
						<input type="button" name="btn" value="Search" onclick="">
					</td>
				</tr>
				<tr>
					<td colspan="2"><div id="demo" onkeyup="loadDoc()"></div></td>
				</tr>
		</table>
		<br>
		<br>
		<?php
			}
		?>
		<br>
		<?php
			require_once('../Backend/functions.php');
			$user = checkrole($_COOKIE['username']);

			if($user['type']==1) {
		?>
				<a href="userlist.php">Check Users|</a>
		<?php
			}
			else
			{
		?>
				<a href="joblist.php">Check Jobs|</a>
		<?php
			}
		?>
		<?php
			require_once('../Backend/functions.php');
			$user = checkrole($_COOKIE['username']);

			if($user['type']==1) {
		?>
				<a href="reg.php">Add Employee|</a>
		<?php
			}
			else?>
				<a href="job.php">Add Job|</a>

		<a href="../backend/logout.php">Logout</a>
	</center>
</body>
</html>