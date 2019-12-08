<?php
	require_once('../backend/functions.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form action="../Backend/updatejob.php" method="post">
		<fieldset style="width: 0px">
			<legend>Edit</legend>
			<table>
				<tr>
					<td>Title</td>
					<td><input type="text" name="title" value="<?= $_REQUEST['username']?>"></td>
				</tr>
				<tr>
					<td>Company</td>
					<td><input type="text" name="company" value="<?php $user = jobinfo($_REQUEST['username']); echo $user['ComName']?>">
					</td>
				</tr>
				<tr>
					<td>Location</td>
					<td><input type="text" name="loc" value="<?php $user = jobinfo($_REQUEST['username']); echo $user['location']?>">
					</td>
				</tr>
				<tr>
					<td>Salary</td>
					<td><input type="text" name="sal" value="<?php $user = jobinfo($_REQUEST['username']); echo $user['salary']?>">
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<br><input type="submit" name="save" value="Save">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
	<br>
	<a href="joblist.php">Back</a>
</body>
</html>