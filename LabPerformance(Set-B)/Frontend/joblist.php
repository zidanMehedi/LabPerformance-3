<!DOCTYPE html>
<html>
<head>
	<title>List</title>
</head>
<body>
	<center>
		<table border="1px" cellspacing="0px" cellpadding="0px">
			<tr>
				<th>Company Name</th>
				<th>Title</th>
				<th>Location</th>
				<th>Salary</th>
				<th>Action</th>
			</tr>
			<?php
				require_once('../Backend/functions.php');
			
					$jobs = joblist();
					for ($i=0; $i < count($jobs) ; $i++) { 
			?>
					<tr>
						<td align="center"><?= $jobs[$i]['ComName']?></td>
						<td align="center"><?= $jobs[$i]['title']?></td>
						<td align="center"><?= $jobs[$i]['location']?></td>
						<td align="center"><?= $jobs[$i]['salary']?></td>
						<td align="center">
								<a href="editjob.php?username=<?= $jobs[$i]['title']?>">EDIT</a> |
								<a href="../backend/deleteuser.php?username=<?= $jobs[$i]['title']?>">DELETE</a>
						</td>
					</tr>
			<?php
					}
			?>
		</table>
		<br>
		<a href="dashboard.php">Back |</a>
		<a href="../backend/logout.php">Logout</a>
	</center>
</body>
</html>