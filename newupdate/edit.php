<?php

include ('connection.php');



if(!$con)
{
    die("Connection failed: " . mysqli_connect_error());
}
$id = $_GET['id']; // get id through query string

$qry = mysqli_query($con,"select * from viewappointment where id='$id'"); // select query

$res = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    
    $done=$_POST['done'];

    $edit = mysqli_query($con,"update viewappointment set  done='$done' where id='$id'");
    
    if($edit)
    {
        mysqli_close($con); // Close connection
        header("location:appointmentlist.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }       
}
?>


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
 
    // state dependent ajax
   
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
                            
                            <select class="form-control" name="done">
                    <option value="Active">Active</option>
                     <option value="completed">Completed</option>
                     
                     <option value="Cancle">Cancle</option>


                 </select>

      

                                       
                 <div class="form-group mb-3">
                                <button type="submit" name="update" class="btn btn-primary">update </button>
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


