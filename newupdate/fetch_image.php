<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<table>


  <?php


include('database_connection.php');
$hospital_registration_number = $_GET['hospital_registration_number'];

$query = "SELECT * FROM tbl_images  WHERE hospital_registration_number  ='$hospital_registration_number' ORDER BY image_id DESC";

$statement = $connect->prepare($query);


$output = '<div class="row">
<table class="table table-bordered table-striped">
  <tr> <tr><th> Image</th>
  <th>TIME </th></tr>

';








if($statement->execute())
{
 $res = $statement->fetchAll();

 foreach($res as $row)
 {



  $output .= '
<tr>
  <td> <img    src="data:image/jpeg;base64,'.base64_encode($row['images'] ).'" class="img-thumbnail"  / " style="max-width:100%;cursor:pointer"
  onclick="onClick(this)" class="modal-hover-opacity" ></td>

 <td>'.$row["reg_date"].'</td>
 </tr>
  '

  ;

 }
}

$output .= '</div>';

echo $output;?>
  



</table>
