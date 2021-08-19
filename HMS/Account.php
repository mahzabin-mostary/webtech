<?php
        include("include/header.php");

        if (isset($_POST['create'])){
              $fname = $_POST['fname'];
              $lname = $_POST['lname'];
              $gender = $_POST['gender'];
              $uname = $_POST['uname'];
              $email = $_POST['email'];
              $password = $_POST['pass'];


              $error = array();

              if (empty($fname))
              {$error['ac'] = "Enter first name";}
              elseif(empty($lname))
              {$error['ac'] = "Enter last name";} 
              elseif(empty($gender))
              {$error['ac'] = "Select gender";} 
              elseif(empty($uname))
              {$error['ac'] = "Enter Username";} 
              elseif(empty($email))
              {$error['ac'] = "Enter Email";} 
              elseif(empty($password))
              {$error['ac'] = "Enter Password";}

              if(count($error)==0){
                    $query = "INSERT INTO patient(id,firstname,lastname,gender,username,email,password,date_reg,profile) VALUES('$fname','$fname','$lname','$gender','$uname','$email','$password',NOW(),'patient.jpg')";

                    $res = mysqli_query($conenct,$query);
                    if ($res) {
                          header("Location:patientlogin");}
                    else{ echo "<script>alert('failed')</script>";}
              }
            }
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
      <title>Patient Registration</title>
</head>
<body  style="background-image : url(img/back.p1);backgroung-repeat: no-repeat;background-size: cover;">
     

<div class="container-fluid">
             <div class="col-md-12">
                   <div class="row">
                         <div class="col-md-3"></div>
                         <div class="col-md-6 my-2 jumbotron">
                               <h4 class="text-center text-info my-2">Registration</h4>
                               <form method="post">
                                     <div class="form-group">
                                           <label >First name</label>
                                           <input type="text" name="fname" class="form-control" placeholder="Enter first name">
                                     </div>
                                     <div class="form-group">
                                           <label >Last name</label>
                                           <input type="text" name="lname" class="form-control" placeholder="Enter last name">
                                     </div>
                                     <div class="form-group">
                                           <label >Gender</label>
                                           <select name="gender" class="form-control">
                                                 <option value="">Select gender</option>
                                                 <option value="Male">Male</option>
                                                 <option value="Female">Female</option>
                                           </select>
                                     </div>
                                     <div class="form-group">
                                           <label >Username</label>
                                           <input type="text" name="uname" class="form-control" placeholder="Enter Username">
                                     </div>
                                     <div class="form-group">
                                           <label >Email</label>
                                           <input type="text" name="email" class="form-control" placeholder="Enter Email">
                                     </div>
                                     <div class="form-group">
                                           <label >Password</label>
                                           <input type="password" name="pass" class="form-control" placeholder="Enter Password">
                                     </div>
                                     
                                     <input type="submit" name="register" class="btn btn-info" value="Create Account">
                                     <p> Already registered? <a href="patientlogin.php"> Click here</a></p>
                               </form>
                         </div>
                   </div>
             </div>

       </div>
</body>
</html>