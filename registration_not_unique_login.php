<?php 
$db = require (__DIR__."\\db.php");

$sibersList = $db->query('SELECT * FROM userdata');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>sibers</title>
</head>
<body>
	<p>This login is already exists, try another.</p>

		<form action="data.php" enctype="multipart/form-data" method="post">

		<p>Login</p>
		<input type="text" name="userLogin" required>
		
		<p>Password</p>
		<input type="password" name="userPassword" required>

		<p>First name</p>
		<input type="text" name="userName" required>

		<p>Surname</p>
		<input type="text" name="userSurname" required>

		<p>Sex</p>
		<p><select size="2" multiple name="sex" required>
			<option value="male">Male</option>
			<option value="female">Female</option>
   		</select></p>

		<p>Day of birth</p>
		<input type="date" name="dateOfBirth" required>

		<p>
		<input type="submit" value="submit">
		</p>

		</form>
</body>
</html>