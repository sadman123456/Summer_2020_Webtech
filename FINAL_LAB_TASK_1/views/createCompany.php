<DOCTYPE HTML>
<html lang="en-US">
	<head>
		<title></title>
	</head>
	<body>
		<b>CREATE COMPANY</b><br><br>
		<form action="../php/companyInsert.php" method="post" enctype="multipart/form-data">
			<table>
				<tr>
					<td>ID</td>
					<td><input type="text" name="id"></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" name="company_name"></td>
				</tr>
				<tr>
					<td>Description</td>
					<td><input type="text" name="profile_description"></td>
				</tr>
				<tr>
					<td>Industry</td>
					<td><input type="text" name="industry"></td>
				</tr>
				<tr>
					<td>Website</td>
					<td><input type="text" name="company_website"></td>
				</tr>
				<tr>
					<td>Logo</td>
					<td><input type="file" name="company_logo"></td>
				</tr>
				<tr>
					<td colspan="2" align="right"><input type="submit" name="create" value="Create"></td>
				</tr>
			</table>
		</form>
	<body>
</html>