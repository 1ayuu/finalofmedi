<!DOCTYPE html>
<html>
<head>
	<title>patient's registration page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  
 background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;}
  .topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  color: blue;
}

  opacity: 0.8;

  width: auto;
  padding: 10px 18px;
  background-color: #f44336;

  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;





span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
 
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
/* The Close Button (x) */

  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

}

</style>
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
</head>
<body >

<div class="topnav">
  <a  href="admin_homepage.php">Home</a> 
  <a href="./archive.php">Archives</a>
  <a href="./patients_listview.php"> Patients List</a>
  <a class="active" href="./new_registration.php">New Registration</a>
  <a href="./logout.php">Logout</a>
</div>

	<center>
	<h2> Registration Form</h2>
	<form  action=""  class="modal-content animate" method="POST">
		<label>First Name</label>
		<input type="text" name="first_name" required>
		<br/>
		<label>Last Name</label>
		<input type="text" name="last_name" required>
		<br/>
		<label>Age</label>
		<input type="number" name="age" required>
		<br/>
		<label>Gender</label>
	    <input type="radio" id="male" name="gender" value="Male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="Female">
        <label for="female">Female</label>
		<br/>
		<label>Address</label>
		<input type="text" name="address">
		<br/>
        <label>Citizenship Number</label>
        <input type="text" name="citizenshipnumber" required>
        <br>
        <label for="email">Email Address</label>
        <input type="text" name="email" required>
        <br>
        <label>Contact Number</label>
        <input type="text" name="phonenumber" required>
        <br>
        <label>Father's Name</label>
		<input type="text" name="father_name" required>
		<br/>
		<br>
        <label>Blood type</label>
		<input type="text" name="blood" >
		<br/>
		<br>
        <label>Body tempertaure</label>
		<input type="text" name="tempertaure" >
		<br/>
		<!--<label>Patient's Registrayion Number</label>
		<input type="text" name="patient_registration_no" required>
		<br/> -->
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

		 <button type="reset">Reset</button>
		 <button type="submit" class="registration_btn" name="registration_submit">Submit</button>



	</form>
</center>

</body>
</html>

<?php

include 'connection.php';

if (isset($_POST['registration_submit'])) {
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$age = $_POST['age'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $citizenship_number = $_POST['citizenshipnumber'];
    $father_name = $_POST['father_name'];
    $email_address = $_POST['email'];
   
    //$hospital_registration_number = $_POST['patient_registration_no'];
    $department = $_POST['department'];
    $consultant_doctor = $_POST['consultant_doctor'];
    $phone_number = $_POST['phonenumber'];
     $blood=$_POST['blood'];
    $tempertaure=$_POST['tempertaure'];


  $insertquery = "insert into patient(first_name, last_name, age, gender, address, citizenship_number, father_name, email_address, department, consultant_doctor, phone_number,blood,tempertaure) values('$first_name', '$last_name', '$age', '$gender', '$address', '$citizenship_number', '$father_name','$email_address', '$department', '$consultant_doctor','$phone_number','$blood','$tempertaure')";

  $res = mysqli_query($con,$insertquery);
  if ($res){
  	?>
  	 <script type="text/javascript">
  	 	alert("Data inserted properly");
  	 </script>

  	<?php
  }else{
  	?>
  	 <script type="text/javascript">
  	 	alert("Data  not inserted");
  	 </script>

  	<?php

  }
}

?>
