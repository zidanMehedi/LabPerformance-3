<!DOCTYPE html>
<html>
<head>
	<title>Add Job</title>
</head>
<body>
	<form action="../Backend/Addjob.php" method="post">
		<fieldset style="width: 300px">
			<legend>Add Job</legend>
			<table border="0px">
				<tr>
					<td width="500px">Company Name</td>
					<td><input type="text" name="cname"></td>
				</tr>
				<tr>
					<td>Title</td>
					<td><input type="text" name="title"></td>
				</tr>
				<tr>
					<td>Location</td>
					<td><input type="text" name="loc"></td>
				</tr>
				<tr>
					<td>Salary</td>
					<td><input type="text" name="salary"></td>
				</tr>
				
				<tr>
					<td></td>
					<td>
						<input type="submit" name="add" value="Add">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
	<br>
		<a href="../Backend/logout.php">Sign Out</a>
	
</body>
</html>