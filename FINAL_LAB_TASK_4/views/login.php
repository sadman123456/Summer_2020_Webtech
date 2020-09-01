<?php
if (isset($_GET['error'])){
	
	if ($_GET['error']=='db_error'){
	echo "Something went wrong___try again";
}
}
?>

<!DOCTYPE html>
<html>
<head>

	<title>Login</title>

</head>
<body>

	<form action="#" method="post">
		<fieldset>
			<legend>SignIn</legend>
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
					<td><input type="submit" name="submit" value="Submit" > <a href="login.php" style="display:none">Login</a></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>