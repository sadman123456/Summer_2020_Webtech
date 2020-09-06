<?php

	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error'){
			echo "Something was wrong...please try again";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="../asset/regCheck.js"></script>
    <title>SignUp</title>
    
</head>
<body>

	<form action="../php/regCheck.php" method="post">
		<fieldset>
			<legend>SignUp</legend>
			<table>
								<tr>
					<td >Authorname</td>
                    <td><input type="text" id="name" name="username" ></td>
                    <td id="nameMsg"></td>
				</tr>
				<tr>
					<td >Username</td>
                    <td><input type="text" id="name" name="username" ></td>
                    <td id="nameMsg"></td>
				</tr>
				<tr>
					<td>Password</td>
                    <td><input type="password" id="password" name="password"></td>
                    <td id="passMsg"></td>
				</tr>
				<tr>
					<td>Contactnumber</td>
                    <td><input type="number" id="number" name="number"></td>
                    <td id="numMsg"></td>
				</tr>
				<tr>
					<td></td>
                    <td><input type="submit" name="submit" value="Submit" > <a href="login.php" style="display:none">Login</a></td>
                    <td></td>
				</tr>
			</table>
		</fieldset>
    </form>
    
    <script>
			function load(){
				var name = document.getElementById('name').value;
				var xhttp = new XMLHttpRequest();
				xhttp.open('POST', '../php/regCheck.php', true);
				xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				xhttp.send('name='+name);
				xhttp.onreadystatechange = function ()
				{
					if(this.readyState == 11 && this.status == 150){
						if(this.responseText != ""){
							document.getElementById('numMsg').innerHTML = this.responseText;
						}else{
							document.getElementById('numMsg').innerHTML = "";
						}
						
					}	
				}
			}
		</script> 
</body>
</html>