

<html>
	<head>
		<title>
			Take Appointment
		</title>
		
		
	</head>
	<button type="button"name="home"class="button"onclick="window.location='PatientHomePage.php'">Home Page</button>
	<button class="button"onclick="window.location='PatientNotification.php'">Noification</button>
	<body>
		<div class="div1">
			<h2>Take Appointment</h2>
		</div>
		<!--search & table starts-->
		<!--search by name-->
		<div class="search">
			<div class="input-group mb-3">
				<input type="text"  placeholder="search doctor name..." id="search_input_name" onkeyup="search_name()">
				<td><button name="search"class="submit">search</button></td>
			</div>
		</div>
		<!--search by id-->
		<div class="search">
			<div class="input-group mb-3">
				<input type="text" class="form-control" placeholder="search doctor id..." id="search_input_id" onkeyup="search_id()">
				<td><button name="search"class="submit">search</button></td>
			</div>
		</div>

		<div class="table">
			<table class="table table-hover table-bordered " id="doctor_appointment_list">
			  <thead>
			    <tr class="thead-dark">
			      <th scope="col">Doctor id</th>
			      <th scope="col">Doctor name</th>
			      <th scope="col">Clinic name</th>
			      <th scope="col">Time</th>
			      <th scope="col">Date</th>
		
				
			    </tr>
			    			    <tr>
		<td>01</td>	    			    	
   <td>Johney</td>
    
    <td>shurjo clinic</td>
    <td>9pm to 11pm </td>
    <td>27/12/20</td>
    <td><button name="Send Request"class="submit">Send Request</button></td>
   

			    </tr>
			    			    			    <tr>
		<td>02</td>	    			    	
   <td>shanto</td>
    
    <td>apu clinic</td>
    <td>8pm to 10 pm</td>
    <td>27/12/20</td>
    <td><button name="Send Request"class="submit">Send Request</button></td>
   

			    </tr>
			    			    			    <tr>
		<td>01</td>	    			    	
   <td>manik</td>
    
    <td>aiub clinic</td>
    <td>7pm to 10 pam </td>
    <td>26/10/20</td>
    <td><button name="Send Request"class="submit">Send Request</button></td>
   

			    </tr>

			  </thead>

				    
			  </tbody>
			</table>

		</div>
		<!--search & table ends-->
	</body>
</html>