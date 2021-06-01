
	 		

   				
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;    
}
</style>
	<title></title> 
	</script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="topnav">
  <a href="admin_homepage.php">Home</a> 
  <a href="./archive.php">Archives</a>
  <a href="./patients_listview.php"> Patients List</a>
  <a href="./new_registration.php">New Registration</a>
  <a href="./logout.php">Logout</a>
</div>
	
	 <!-- <h3>Search using patient's Registration Number</h3> -->
	 <div class="main-div" >
	 	
	 
	 	<div class="table-responsive">
	 		<table id="myTable">
	 			
	 		
	 				
	 					
	 				
	 			
	 			
          
               	 <tbody>
	 				<?php
               include ('connection.php');
                 $hospital_registration_number = $_GET['hospital_registration_number'];
               $query = mysqli_query($con, "select * from patient WHERE hospital_registration_number  ='$hospital_registration_number'");
             //  $nums = mysqli_num_rows($query);
           
               //$res = mysqli_fetch_array($query);
               while ($res = mysqli_fetch_array($query)) {
               ?>
               <table>
		               	<tr>
			 					<th>Patient's Id</th>
		               	<td><?php echo $res['hospital_registration_number']; ?></td>
		               </tr>

                 		<tr>
		                   <th> First Name</th>
		               		<td><?php echo $res['first_name']; ?></td>
		               	</tr>
	 					<tr>
	 							<th>Last Name</th>
	 						<td><?php echo $res['last_name']; ?></td>
	 					</tr>
	 					
	 					<tr> 
	 					<th>Age</th>
	 					
	 					  
	 						<td><?php echo $res['age']; ?></td></tr>
	 					<tr>  <th>Gender</th>
	 					
	 						<td><?php echo $res['gender']; ?></td></tr>
	 					<tr>  
	 					<th>Address</th>
	 					
	 						<td><?php echo $res['address']; ?></td></tr>
                        <tr> <th>Citizenship No.</th>
	 				
	 					
                        	<td><?php echo $res['citizenship_number']; ?></td></tr>
	 					
	 					<tr>   <th>Father's Name</th>
	 					  
	 						<td><?php echo $res['father_name']; ?></td></tr>
	 					<tr>  
	 					<th>Email Address</th>
	 					   
	 						<td><?php echo $res['email_address']; ?></td></tr>
	 					<tr>   
	 						<th>Phone Number</th> 
	 					
	 						<td><?php echo $res['phone_number']; ?></td></tr>
	 				    <tr>  
	 				    <th>blood type</th>
	 					
	 				    	<td><?php echo $res['blood']; ?></td></tr>
	 				    <tr> <th>temperature</th>   
	 				    	<td><?php echo $res['tempertaure']; ?></td></tr>
               	
               

	 				<?php

                        }
               
	 				?>
	 			</tbody>
	 		</table></tbody></table>
	 	</div></div>
	 </body>





                            <div class="main-div" >
	 	
	 
	 	<div class="table-responsive">
	 		<table id="myTable">
	 			
	 		
	 				
	 					
	 				
	 			
	 			
          
               	 <tbody>
	 				<?php
               include ('connection.php');
                 $hospital_registration_number = $_GET['hospital_registration_number'];
               $query = mysqli_query($con, "select * from toupdate1 WHERE hospital_registration_number  ='$hospital_registration_number'");
             //  $nums = mysqli_num_rows($query);
           
               //$res = mysqli_fetch_array($query);
               while ($res = mysqli_fetch_array($query)) {
               ?>
               <table>
		               
		               <tr>
		                   <th> update date:</th>
		               		<td><?php echo $res['updateTime']; ?></td>
		               	</tr>
	 					
                 		<tr>
		                   <th> department:</th>
		               		<td><?php echo $res['Department']; ?></td>
		               	</tr><tr>
		                   <th> Consultant_Doctor:</th>
		               		<td><?php echo $res['Consultant_Doctor']; ?></td>
		               	</tr>
		               	<tr>
		                   <th>Description :</th>
		               		<td><?php echo $res['description']; ?></td>
		               	</tr>
		               		<tr>
		                   <th>medicine:</th>
		               		<td><?php echo $res['medicine']; ?></td>
		               	</tr>
		               	
		               	

	 						
	 				<?php

                        }
               
	 				?>
	 			</tbody>
	 		</table></tbody></table>
	 	</div></div>
	 </body>











	 </html>