<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form action="../Backend/login.php" method="post">
		<fieldset style="width: 0px">
			<legend>Sign In</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<br><input type="submit" name="login" value="Log In">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>