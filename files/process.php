<?php

session_start();
if ($_POST['password'] == 'medical') {

	header("location:firstpage.php");
} 
 
  else {
header("location:index.php ");

}

