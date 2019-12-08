<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<form action="../backend/reg.php" method="post">
		<fieldset style="width: 300px">
			<legend>Registration</legend>
			<table border="0px">
				<tr>
					<td width="500px">Employee Name</td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Company Name</td>
					<td><input type="text" name="cname"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td>Contact No</td>
					<td><input type="text" name="con"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td>
							<br><input type="submit" name="add" value="Add">	
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
	
		<br><a href="logout.php">Sign Out</a>
	
</body>
</html>