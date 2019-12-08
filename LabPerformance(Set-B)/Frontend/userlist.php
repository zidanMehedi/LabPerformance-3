<!DOCTYPE html>
<html>
<head>
	<title>List</title>
</head>
<body>
	<center>
		<table border="1px" cellspacing="0px" cellpadding="0px">
			<tr>
				<th>Username</th>
				<th>Email</th>
				<th>Type</th>
				<th>Action</th>
			</tr>
			<?php
				require_once('../Backend/functions.php');
				$user = checkrole($_COOKIE['username']);
				if($user['type']==0)
				{
					$users = details($_COOKIE['username']);
			?>
					<tr>
						<td align="center"><?= $users['username']?></td>
						<td align="center"><?= $users['email']?></td>
						<td align="center"><?= $users['type']?></td>
						<td align="center">
								<a href="edituser.php?username=<?= $users['username']?>">EDIT</a>
						</td>
					</tr>
			<?php
				}
					else{
					$users = getuser();
					for ($i=0; $i < count($users) ; $i++) { 
			?>
					<tr>
						<td align="center"><?= $users[$i]['username']?></td>
						<td align="center"><?= $users[$i]['email']?></td>
						<td align="center"><?= $users[$i]['type']?></td>
						<td align="center">
								<a href="edituser.php?username=<?= $users[$i]['username']?>">EDIT</a> |
								<a href="../backend/deleteuser.php?username=<?= $users[$i]['username']?>">DELETE</a>
						</td>
					</tr>
			<?php
					}
				}

			?>
		</table>
		<br>
		<a href="dashboard.php">Back |</a>
		<a href="../backend/logout.php">Logout</a>
	</center>
</body>
</html>