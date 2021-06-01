
	 		

   				
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
	 			
	 		
	 				
	 					
	 				
	 				</tr>
	 			</thead>
	 			
               <tr>
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
               	
               
	 			
</td>

	 				</tr>

	 				<?php

                        }
               
	 				?>
	 			</tbody>
	 		</table>
	 	
                         
	<!--	<label>Department</label>
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
		<select name="doctor" id="consultant_paedracition">
			<option value= "doctor_a"> Dr. Paedratic A </option>
			<option value="doctor_b"> DR. Paedratic B </option>
			<option value= "doctor_c"> Dr. Paedratic C</option>
			<option value="doctor_d"> DR.Paedratic D </option>
			

			
		</select>
	</div>
	<br>
        <div id="select_physician" style="visibility: hidden;">
        
		<label >Consultant Doctor</label>
		<select name="doctor" id="consultant_physician">
			<option value= "doctor_a"> Dr. A Physician</option>
			<option value="doctor_b"> DR. B Physician</option>
			<option value= "doctor_c"> Dr. C Physician</option>
			<option value="doctor_d"> DR. D Physician</option>
			

			
		</select>
	</div>
	<br>
        <div id="select_gynaecologist" style="visibility: hidden;">
		<label >Consultant Doctor</label>
		<select name="doctor" id="consultant_gynaecologist">
			<option value= "doctor_a"> Dr. A Paudel gynaecologist</option>
			<option value="doctor_b"> DR. B Paudel gynaecologist</option>
			<option value= "doctor_c"> Dr. C Paudel gynaecologist</option>
			<option value="doctor_d"> DR. D Paudel gynaecologist</option>
			

			
		</select>
	</div>
	<br>
        <div id="select_nephrologist" style="visibility: hidden;">
		<label >Consultant Doctor</label>
		<select name="doctor" id="consultant_nephrologist">
			<option value= "doctor_a"> Dr. A Paudel nephrologist</option>
			<option value="doctor_b"> DR. B Paudel nephrologist</option>
			<option value= "doctor_c"> Dr. C Paudel nephrologist</option>
			<option value="doctor_d"> DR. D Paudel nephrologist</option>
			

			
		</select>
	</div>
	<br>
        <div id="select_neurologist" style="visibility: hidden;">
		<label >Consultant Doctor</label>
		<select name="doctor" id="consultant_neurologist">
			<option value= "doctor_a"> Dr. A Paudel neurologist</option>
			<option value="doctor_b"> DR. B Paudel neurologist</option>
			<option value= "doctor_c"> Dr. C Paudel neurologist</option>
			<option value="doctor_d"> DR. D Paudel neurologist</option>
			

			
		</select>
	</div>-->



	 		
	 	</tr></table></div></div>
	 		 	
	
 <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                         unset($_SESSION['status']);
                    }
                ?>

                <div class="card mt-5">
                    <div class="card-header">
                        <h4> Update </h4>
                    </div>
                    <div class="card-body">

                        <form action="" method="POST">
                               <div class="form-group mb-3">
                                <label for="">Patient Name</label>
                                <input type="text" name="name" class="form-control" value="<?php 
                                 $hospital_registration_number = $_GET['hospital_registration_number'];
               $query = mysqli_query($con, "select * from patient WHERE hospital_registration_number  ='$hospital_registration_number'");while ($res = mysqli_fetch_array($query)) {?><?php echo $res['first_name']; ?> <?php

                        }
               
	 				?>">
                            </div>

                              <div class="form-group mb-3">
                                <label for="">Patient Id</label>
                                <input type="text" name="hospital_registration_number" class="form-control" value="<?php 
                                 $hospital_registration_number = $_GET['hospital_registration_number'];
               $query = mysqli_query($con, "select * from patient WHERE hospital_registration_number  ='$hospital_registration_number'");while ($res = mysqli_fetch_array($query)) {?><?php echo $res['hospital_registration_number']; ?> <?php

                        }
               
                    ?>">
                            </div>
                            
                           
                                  <div class="form-group mb-3">
        <label>Department</label>
        <select name="Department" id="department" onchange="return showDoctor();">
            <option value="Paedracition"> Paedracition </option>
            <option value="Physician"> Physician </option>
            <option value="Gynaecologist"> Gynaecologist </option>
            <option value="Nephrologist"> Nephrologist</option>
            <option value="Neurologist"> Neurologist</option>
        </select>

</div>

                      <div class="form-group mb-3">
                              <label>doctor name</label>
                                    <input type="text" name="Consultant_Doctor" required>
                                    <br/></div>

                      <div class="form-group mb-3">
                            
                                        <label>description</label>
                                        
                                       <textarea name="description" rows="4" cols="50"></textarea><br></div>
                                        <div class="form-group mb-3">
                            
                                        <label>medicine</label></textarea>
                                        
                                <textarea name="medicine" rows="4" cols="50">

                                </textarea><br>
                         </div>

                           
                            <div class="form-group mb-3">
                                <button type="submit" name="save_datetime" class="btn btn-primary">Save Event</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
$username = "root";
$password = "";
$server = 'localhost';
$db = 'medicalarchiver';

$con = mysqli_connect($server , $username , $password , $db);



if(isset($_POST['save_datetime']))
{
    $name = $_POST['name'];
    
    $hospital_registration_number=$_POST['hospital_registration_number'];
    $Department=$_POST['Department'];
    $Consultant_Doctor=$_POST['Consultant_Doctor'];
    $description=$_POST['description'];
    $medicine=$_POST['medicine'];

    $query = "INSERT INTO toupdate1 (name,hospital_registration_number,Department,Consultant_Doctor,description,medicine)
     VALUES ('$name','$hospital_registration_number','$Department','$Consultant_Doctor','$description','$medicine')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Date Time Inserted Successfully";
       
    }
    else
    {
        $_SESSION['status'] = "Date Time Not Inserted";
        
    }
}
?>