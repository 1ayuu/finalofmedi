
<?php

//insert.php

include('database_connection.php');


 $hospital_registration_number=$_POST['hospital_registration_number'];
if(count($_FILES["image"]["tmp_name"]) > 0)
{
 for($count = 0; $count < count($_FILES["image"]["tmp_name"]); $count++)
 {
  $image_file = addslashes(file_get_contents($_FILES["image"]["tmp_name"][$count]));
  $query = "INSERT INTO tbl_images(images,hospital_registration_number) VALUES ('$image_file','$hospital_registration_number')";
  $statement = $connect->prepare($query);
  $statement->execute();
 }
}


?>
