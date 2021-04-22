<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		function showDoctor() {
			var selectBox = document.getElementById('department');
			var userInput = selectBox.options[selectBox.selectedIndex].value;
			if(userInput== 'Paedracition'){
				document.getElementById('select_paedracition').style.visibility= 'visible';
				document.getElementById('select_physician').style.visibility= 'hidden';	
			    document.getElementById('select_gynaecologist').style.visibility= 'hidden';
			    document.getElementById('select_nephrologist').style.visibility= 'hidden';
			    document.getElementById('select_neurologist').style.visibility= 'hidden';
			}
			else if (userInput == 'Physician'){
			    document.getElementById('select_physician').style.visibility= 'visible';
			    document.getElementById('select_paedracition').style.visibility= 'hidden';	
			    document.getElementById('select_gynaecologist').style.visibility= 'hidden';
			    document.getElementById('select_nephrologist').style.visibility= 'hidden';
			    document.getElementById('select_neurologist').style.visibility= 'hidden';
			}
			else if (userInput == 'Gynaecologist'){
			    document.getElementById('select_gynaecologist').style.visibility= 'visible';	
			    document.getElementById('select_nephrologist').style.visibility= 'hidden';
			    document.getElementById('select_neurologist').style.visibility= 'hidden';
			    document.getElementById('select_paedracition').style.visibility= 'hidden';
			    document.getElementById('select_physician').style.visibility= 'hidden';	
			}
			else if (userInput == 'Nephrologist'){
			    document.getElementById('select_nephrologist').style.visibility= 'visible';	
			    document.getElementById('select_paedracition').style.visibility= 'hidden';
			    document.getElementById('select_physician').style.visibility= 'hidden';	
			    document.getElementById('select_gynaecologist').style.visibility= 'hidden';
			     document.getElementById('select_neurologist').style.visibility= 'hidden';
			}
			else if (userInput == 'Neurologist'){
			    document.getElementById('select_neurologist').style.visibility= 'visible';	
			    document.getElementById('select_paedracition').style.visibility= 'hidden';
			    document.getElementById('select_physician').style.visibility= 'hidden';	
			    document.getElementById('select_gynaecologist').style.visibility= 'hidden';
			    document.getElementById('select_nephrologist').style.visibility= 'hidden';
			}
			else {
				document.getElementById('select_paedracition').style.visibility= 'hidden';
			    document.getElementById('select_physician').style.visibility= 'hidden';	
			    document.getElementById('select_gynaecologist').style.visibility= 'hidden';
			    document.getElementById('select_nephrologist').style.visibility= 'hidden';
			    document.getElementById('select_neurologist').style.visibility= 'hidden';
			}
			return false;
		}
	</script>

	<title>Make Appointment</title>
</head>
<body>
	<fieldset><h1> Make an appoinment </h1>
<div class="table-responsive">
	 		<table id="myTable">
	 			
	 			<thead>
	 				<tr>
	 					<th>Patient's Id</th>
	 					<th> First Name</th>
	 					<th>Last Name</th>
	 					<th>Age</th>
	 					<th>Gender</th>
	 					<th>Address</th>
	 					<!--<th>Citizenship No.</th>
	 					<th>Father's Name</th>
	 					<th>Email Address</th>
	 					<th>Phone Number</th> -->
	 					
	 					<th>Consultant Doctor</th>
	 					<th>Department</th>
	 				
	 				</tr>
	 			</thead>
	 			<tbody>
	 				<?php
               include 'connection.php';
               $selectquery = "select * from patient where hospital_registration_number = 10 ";
               $query = mysqli_query($con, $selectquery);
               $nums = mysqli_num_rows($query);
               //$res = mysqli_fetch_array($query);
               while ($res = mysqli_fetch_array($query)) {
               ?>
	 					<td><?php echo $res['hospital_registration_number']; ?></td>
	 					<td><?php echo $res['first_name']; ?></td>
	 					<td><?php echo $res['last_name']; ?></td>
	 					<td><?php echo $res['age']; ?></td>
	 					<td><?php echo $res['gender']; ?></td>
	 					<td><?php echo $res['address']; ?></td>

	 					<!--<td><?php echo $res['citizenship_number']; ?></td>
	 					<td><?php echo $res['father_name']; ?></td>
	 					<td><?php echo $res['email_address']; ?></td>
	 					<td><?php echo $res['phone_number']; ?></td> -->
	 					
	 					<td><?php echo $res['consultant_doctor']; ?></td>
	 					<td><?php echo $res['department']; ?></td> 

	 					<?php

                        }
               
	 				?>
	 				</tbody>
	 			</table>
	 			<form >
  <label for="time"> (date and time):</label>
  <input type="datetime-local" id="time" name="time">
  <div>
		<label>Department</label>
		<select name="department" id="department" onchange="return showDoctor();">
			<option value="Paedracition"> Paedracition </option>
			<option value="Physician"> Physician </option>
			<option value="Gynaecologist"> Gynaecologist </option>
			<option value="Nephrologist"> Nephrologist</option>
			<option value="Neurologist"> Neurologist</option>
		</select>
	</div>
        <br>
        <div id="select_paedracition" style="visibility: hidden;">
		<label >Consultant Doctor</label>
		<select name="consultant_doctor" id="consultant_paedracition">
			<option value= "doctor_a"> Dr. Paedratic A </option>
			<option value="doctor_b"> DR. Paedratic B </option>
			<option value= "doctor_c"> Dr. Paedratic C</option>
			<option value="doctor_d"> DR.Paedratic D </option>
			

			
		</select>
	</div>
	<br>
        <div id="select_physician" style="visibility: hidden;">
        
		<label >Consultant Doctor</label>
		<select name="consultant_doctor" id="consultant_physician">
			<option value= "doctor_a"> Dr. A Physician</option>
			<option value="doctor_b"> DR. B Physician</option>
			<option value= "doctor_c"> Dr. C Physician</option>
			<option value="doctor_d"> DR. D Physician</option>
			

			
		</select>
	</div>
	<br>
        <div id="select_gynaecologist" style="visibility: hidden;">
		<label >Consultant Doctor</label>
		<select name="consultant_doctor" id="consultant_gynaecologist">
			<option value= "doctor_a"> Dr. A Paudel gynaecologist</option>
			<option value="doctor_b"> DR. B Paudel gynaecologist</option>
			<option value= "doctor_c"> Dr. C Paudel gynaecologist</option>
			<option value="doctor_d"> DR. D Paudel gynaecologist</option>
			

			
		</select>
	</div>
	<br>
        <div id="select_nephrologist" style="visibility: hidden;">
		<label >Consultant Doctor</label>
		<select name="consultant_doctor" id="consultant_nephrologist">
			<option value= "doctor_a"> Dr. A Paudel nephrologist</option>
			<option value="doctor_b"> DR. B Paudel nephrologist</option>
			<option value= "doctor_c"> Dr. C Paudel nephrologist</option>
			<option value="doctor_d"> DR. D Paudel nephrologist</option>
			

			
		</select>
	</div>
	<br>
        <div id="select_neurologist" style="visibility: hidden;">
		<label >Consultant Doctor</label>
		<select name="consultant_doctor" id="consultant_neurologist">
			<option value= "doctor_a"> Dr. A Paudel neurologist</option>
			<option value="doctor_b"> DR. B Paudel neurologist</option>
			<option value= "doctor_c"> Dr. C Paudel neurologist</option>
			<option value="doctor_d"> DR. D Paudel neurologist</option>
			

			
		</select>
	</div>

  <input type="submit">
</form>


</fieldset>
</body>
</html>