<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous>
</head>
<body>
	<p> This page is going to display all the information of the registered patients.</p>
	 <!-- <h3>Search using patient's Registration Number</h3> -->
	 <div class="main-div" >
	 	<h1> List of the registered patients</h1>
	 	<input type="text" name="" id="userName" placeholder="Search names" onkeyup="searchFun()">
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
	 					<th>Citizenship No.</th>
	 					<!--
	 					<th>Father's Name</th>
	 					<th>Email Address</th>
	 					<th>Phone Number</th> -->
	 					<th>Department</th>
	 					<th>Consultant Doctor</th>
	 					<th>Registration Time </th>
	 					<th colspan="2">Operation</th>
	 				</tr>
	 			</thead>
	 			
               <tr>
               	 <tbody>
	 				<?php
               include ('connection.php');
              
               $query = mysqli_query($con, "select * from patient ");
             //  $nums = mysqli_num_rows($query);
             //  $id = $res=['id'];
               //$res = mysqli_fetch_array($query);
               while ($res = mysqli_fetch_array($query)) {
               ?>
	 					<td><?php echo $res['hospital_registration_number']; ?></td>
	 					<td><?php echo $res['first_name']; ?></td>
	 					<td><?php echo $res['last_name']; ?></td>
	 					<td><?php echo $res['age']; ?></td>
	 					<td><?php echo $res['gender']; ?></td>
	 					<td><?php echo $res['address']; ?></td>
                        <td><?php echo $res['citizenship_number']; ?></td>
	 					<!--
	 					<td><?php echo $res['father_name']; ?></td>
	 					<td><?php echo $res['email_address']; ?></td>
	 					<td><?php echo $res['phone_number']; ?></td> -->
	 					<td><?php echo $res['department']; ?></td>
	 					<td><?php echo $res['consultant_doctor']; ?></td>
	 					<td><?php echo $res['reg_date']; ?></td>
	 					
	 					<td><a href="#update">Update</a> <a href="#delete">Delete</a></td>
	 					<td><i href="#update" class="fa fa-pencil-square-o" aria-hidden="true"></i> <i  href="#delete" class="fa fa-trash" aria-hidden="true"></i> 
	 					<td> <a href="make_appoinment.php?hospital_registration_number=<?php echo $res['hospital_registration_number'];?>"> Make an appointment</a></td>

</td>

	 				</tr>

	 				<?php

                        }
               
	 				?>
	 			</tbody>
	 		</table>
	 		
	 	</div>

	 </div>
	 <script type="text/javascript">
	 	const searchFun = () =>{
	 		let filter = document.getElementById('userName').value.toUpperCase();
	 		let myTable = document.getElementById('myTable');
	 		let tr = document.getElementsByTagName('tr');

	 		for(var i = 0; i < tr.length; i++){
	 			let td = tr[i].getElementsByTagName('td')[1];
	 			if(td){
	 				let textvalue = td.textContent || td.innerHTML;
	 				if (textvalue.toUpperCase().indexOf(filter) > -1) {
	 					tr[i].style.display = "";
	 				} else {
	 					tr[i].style.display = "none";
	 				}
	 			}
	 		}
	 	}
	 </script>


</body>
</html>


