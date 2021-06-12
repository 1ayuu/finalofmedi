<?php
// Include the database connection file
include('connection.php');
 
if (isset($_POST['departmentId']) && !empty($_POST['departmentId'])) {
 
 // Fetch state name base on country id
 $query = "SELECT * FROM doctortable WHERE department_id = ".$_POST['departmentId'];
 $result = $con->query($query);
 
 if ($result->num_rows > 0) {
 echo '<option value="">Select Consultant Doctor</option>';
 while ($row = $result->fetch_assoc()) {
 echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
 }
 } else {
 echo '<option value="">Consultant Doctor not available</option>';
 }
} 
?>
