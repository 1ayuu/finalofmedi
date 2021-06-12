
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script type="text/javascript">
  $(document).ready(function(){
    // Country dependent ajax
    $("#department").on("change",function(){
      var departmentId = $(this).val();
      $.ajax({
        url :"action.php",
        type:"POST",
        cache:false,
        data:{departmentId:departmentId},
        success:function(data){
          $("#usertable").html(data);
        
        }
      });
    });
 
   
   
  });
</script>








	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    nav{
        padding-left: 100px!important;
        padding-right: 100px!important;
        background: #6665ee;
        font-family: 'Poppins', sans-serif;
    } 
    nav a.navbar-brand{
        color: #fff;
        font-size: 30px!important;
        font-weight: 500;
    }
    button a{
        color: #6665ee;
        font-weight: 500;
    }
    button a:hover{
        text-decoration: none;
    }

    </style>
</head>
<body>
 <nav class="navbar">
    <a class="navbar-brand" href="home.php">Home</a>
    <a class="navbar-brand" href="./archive.php">Archives</a>
    <a class="navbar-brand"href="./patients_listview.php"> Patients List</a>
    <a class="navbar-brand" href="./new_registration.php">New Registration</a>
    <a  class="navbar-brand"href="appointmentlist.php"> View appointment</a>



    <button type="button" class="btn btn-light"><a href="logout-user.php">Logout</a></button>
    </nav>

	<p></p>
	 <!-- <h3>Search using patient's Registration Number</h3> -->
	 <div class="main-div" >
	 	
	 
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
	 					<th>Phone Number</th>
	 					<!--
	 					<th>Father's Name</th>
	 					<th>Email Address</th>
	 					 -->
	 					
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
	 					<td><?php echo $res['hospital_registration_number']; ?></td>
	 					<td><?php echo $res['first_name']; ?></td>
	 					<td><?php echo $res['last_name']; ?></td>
	 					<td><?php echo $res['age']; ?></td>
	 					<td><?php echo $res['gender']; ?></td>
	 					<td><?php echo $res['address']; ?></td>
                        <td><?php echo $res['citizenship_number']; ?></td>
                        	<td><?php echo $res['phone_number']; ?>
	 					<!--
	 					<td><?php echo $res['father_name']; ?></td>
	 					<td><?php echo $res['email_address']; ?></td>
	 					<td><?php echo $res['phone_number']; ?></td> -->
	 			
</td>

	 				</tr>

	 				<?php

                        }
               
	 				?>
	 			</tbody>
	 		</table>
	
	 	</div>

	 </div>
	

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
                        <h4>Appointment to doctor</h4>
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
                                <label for="">Phone Number</label>
                                <input type="text" name="phone_number" class="form-control" value="<?php 
                                 $hospital_registration_number = $_GET['hospital_registration_number'];
               $query = mysqli_query($con, "select * from patient WHERE hospital_registration_number  ='$hospital_registration_number'");while ($res = mysqli_fetch_array($query)) {?><?php echo $res['phone_number']; ?> <?php

                        }
               
	 				?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Event Date & Time</label>
                                <input type="datetime-local" name="event_dt" class="form-control">
                            </div>
                 <select class="form-control" name="done">
                    <option value="Active">Active</option>
                     <option value="completed">Completed</option>
                     
                     <option value="Cancle">Cancle</option>


                 </select>



                            <div>
		<label for="country">Department</label>
 <select class="form-control" id="department" name="Department">
 <option value="">Select Department</option>
 <?php
 $query = "SELECT * FROM department";
 $result = $con->query($query);
 if ($result->num_rows > 0) {
 while ($row = $result->fetch_assoc()) {
 echo '<option value="'.$row['id'].'">'.$row['department_name'].'</option>';
 }
 }else{
 echo '<option value="">department not available</option>';
 }
 ?>
 </select>
        <br />
 
 <!-- State dropdown -->
 <label for="department">doctor</label>
 <select class="form-control" name="Consultant_Doctor" id="usertable">
 <option value="">Consultant Doctor</option>
 </select>
	<br>


			                           
                 <div class="form-group mb-3">
                                <button type="submit" name="save" class="btn btn-primary">Save </button>
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
$db = 'DEMO1';

$con = mysqli_connect($server , $username , $password , $db);



if(isset($_POST['save']))
{
    $name = $_POST['name'];
    $event_dt = $_POST['event_dt'];
    $hospital_registration_number=$_POST['hospital_registration_number'];
    $Department=$_POST['Department'];
    $Consultant_Doctor=$_POST['Consultant_Doctor'];
    $phone_number=$_POST['phone_number'];
    $done=$_POST['done'];
    $query = "INSERT INTO demo(name,eventdt,patient_id,Department,Consultant_Doctor,phone_number,done) 
             VALUES ('$name','$event_dt','$hospital_registration_number', '$Department','$Consultant_Doctor','$phone_number','$done')";
   
    $query_run = mysqli_query($con, $query);
     $query1 = "INSERT INTO viewappointment(name,eventdt,patient_id,Department,Consultant_Doctor,phone_number,done)
              VALUES ('$name','$event_dt','$hospital_registration_number','$Department','$Consultant_Doctor','$phone_number,'$done')";
     $query_run1 = mysqli_query($con, $query1);

    if($query_run)
    {
        $_SESSION['status'] = "appointment successfully";
      
    }
    else
    {
        $_SESSION['status'] = "appointment error!";
  
    }
}
?>

