<?php
	require_once('../backend/functions.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form action="../backend/updateuser.php" method="post">
		<fieldset style="width: 0px">
			<legend>Sign In</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="<?= $_REQUEST['username']?>"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" value="<?php $user = getinfo($_REQUEST['username']); echo $user['email']?>">
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
	<a href="userlist.php">Back</a>
</body>
</html>