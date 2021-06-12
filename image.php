
<!DOCTYPE html>  
<html>  
    <head>  
        <title>Insert  Images </title>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
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



        
        <br /><br />  
        <div class="container">  
   <h3 align="center">Insert  Images </h3>  
            <br />  

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
        

            <form method="post" id="upload_multiple_images" enctype="multipart/form-data">
                <input type="file" name="image[]" id="image" multiple accept=".jpg, .png, .gif" />
                <br />
               

                                <label for="">Patient Id</label>
                                <input type="text" name="hospital_registration_number" class="form-control" value="<?php 
                                 $hospital_registration_number = $_GET['hospital_registration_number'];
               $query = mysqli_query($con, "select * from patient WHERE hospital_registration_number  ='$hospital_registration_number'");while ($res = mysqli_fetch_array($query)) {?><?php echo $res['hospital_registration_number']; ?> <?php

                        }
               
                    ?>">
                      <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />       
            </form>
            <br />  
            <br />
   
            <div id="images_list"></div>
            
        </div>  
    </body>  
</html>  
<script>  
$(document).ready(function(){

    load_images();

    function load_images()
    {
        $.ajax({

            url:"fetch_images.php?hospital_registration_number= <?php 
                                 $hospital_registration_number = $_GET['hospital_registration_number'];
               $query = mysqli_query($con, "select * from patient WHERE hospital_registration_number  ='$hospital_registration_number'");while ($res = mysqli_fetch_array($query)) {?><?php echo $res['hospital_registration_number']; ?> <?php

                        }
               
                    ?>",
            success:function(data)
            {
                $('#images_list').html(data);
            }
        });
    }
 
    $('#upload_multiple_images').on('submit', function(event){
        event.preventDefault();
        var image_name = $('#image').val();
        if(image_name == '')
        {
            alert("Please Select Image");
            return false;
        }
        else
        {
            $.ajax({
                url:"insert.php",
                method:"POST",
                data: new FormData(this),
                contentType:false,
                cache:false,
                processData:false,
                success:function(data)
                {
                    $('#image').val('');
                    load_images();
                }
            });
        }
    });
 
});  
</script>
