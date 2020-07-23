<?php


	if(isset($_GET['submit'])){
		var_dump($a);
		if($a == ""){
			echo "Invalid request";
		}else{
			echo $a;
		}
	}
	
?>


<!DOCTYPE html>
<html>
<head>
	<title>gender Input</title>
</head>
<body>

	<form action="#" method="GET">
		<fieldset>
			<legend>Date of Birth</legend>
			<tr>
						<td>Date of Birth</td>

					<td><input type="date" name="dob" value="" placeholder=""></td>
				</tr>

			
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>