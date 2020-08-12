	
<html>
	<head>
		<title>
			Patient Profile
		</title>
		
	</head>
	<button class="button"name="home"onclick="window.location='logout.php'">Logout</button>
	<button type="button"name="home"class="button"onclick="window.location='PatientHomePage.php'">Home Page</button>
	<button class="button"onclick="window.location='PatientNotification.php'">Noification</button>
	<body>
		<div class="div1">
			<h2>My Profile</h2>
		</div>
		<!--Patient Profile starts-->
		<div class="dregister">
			<h4>Update your profile</h4><hr><br>
            <table>
              <tr>
                <td><label >Name:</label></td>

                <td> <input type="text" name="name" </td>
              </tr>
              <tr>
                <td><label >Gender:</label></td>

                <td>
                  <input  type="radio" name="user_gender" value="Male">Male
                  <input  type="radio" name="user_gender" value="Female">Female
                </td>

              </tr>
              <tr>
                <td><label >Email:</label></td>

                <td> <input  type="email" name="user_email" </td>
              </tr>
              <tr>
                <td><label >Phone:</label></td>

                <td> <input  type="text" name="user_phone" </td>
              </tr>
              <tr>
                <td><label >Blood Group:</label></td>

                <td>							
							<select>	<option value="">Select Blood Group</option>
								<option  value="A+">A+</option>
								<option  value="A-">A-</option>
								<option value="B+">B+</option>
								<option  value="B-">B-</option>
								<option  value="O+">O+</option>
								<option  value="O-">O-</option>
							</select></td>
              </tr>
              <tr>
                <td><label >Date of Birth:</label></td>

                <td> <input  type="date" name="user_dob" </td>
              </tr>
              <tr>
                <td><label >Address:</label></td>
                <td><textarea name="user_address" rows="8" cols="35"></textarea> </td>
              </tr>
              <tr>
                <td><label >Password:</label></td>

                <td> <input type="password" name="user_password" value="" required> </td>
              </tr>
              <tr>
                <td><label >Cofirm Password:</label></td>
                <td> <input  type="password" name="user_con_password" value="" required> </td>
              </tr>
              <tr>
                  <td colspan="2" ><input type="submit" name="submit" value="REGISTER"></td>
              </tr>
            </table>
				
				
				
				
			</form>	
		</div>
		<!--Patient profile ends-->	
	</body>
</html>