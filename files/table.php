
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	<tr>
		<th>first name </th>
		<th>last name</th>
		<th>Age</th>
		<th>Gender</th>
		<th>address</th>
		<th>citizenship_number</th>
		<th>father_name</th>
		<th>email_address</th>
		<th>hospital_registration_number</th>
		<th>department</th>

		<th>consultant_doctor,</th>
		<th>phone_number</th>

	</tr>
	<?php
	$conn =mysqli_connect("localhost","root","","medicalarchive");
	if($conn-> connect_error)
		{
			die ("connection failed:".$conn -> connect_error)
		}
		$sql ="select first_name, last_name, age, gender, address, citizenship_number, father_name, email_address, hospital_registration_number, department, consultant_doctor,phone_number from patient"
		$result=$conn->query($sql);
		if($result->num_rows>0){
			while ($row =$result ->fetch_assoc()) {
				# code...
				echo "<tr><td>".$row["first_name"]."</td><td>".$row["last_name"]."</td><td>".$row[" age"]."</td><td>".$row["gender"]."</td><td>".$row["first_name"]."</td><td>".$row["first_name"]."</td><td>".$row["first_name"]."</td><td>".$row["first_name"]."</td><td>".$row["first_name"]."</td><td>".$row["first_name"]."</td></tr>";

			}
			echo "</table>";

		}
		else {
			echo "0 result";

		}
		$conn->close();
		?>

		
</table>
</body>
</html>