<?php 

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "hospitalmanagement";
 
$conn = mysqli_connect($serverName, $userName, $password, $dbName);
 
if(mysqli_connect_errno()){
  echo "Error: " . mysqli_connect_errno();
  die();
}
$dname = $days = $vhour = $hname =$regSuccessful = "";
$errExits = 0;
if($_SERVER["REQUEST_METHOD"]=="POST"){
  if(empty($_POST['dname']))
  {
    // $usernameErr = "Username cannot be empty!";
    $errExits=1;
  }
  else
  {
      $dname = mysqli_real_escape_string($conn, $_POST['dname']);
    }
    if(empty($_POST['vhour']))
  {
    
    $errExits=1;
  }
  else
  {
      $vhour = mysqli_real_escape_string($conn, $_POST['vhour']);
    }
    if(empty($_POST['hname']))
  {
    
    $errExits=1;
  }
  else
  {
      $hname = mysqli_real_escape_string($conn, $_POST['hname']);
    }
    $days = mysqli_real_escape_string($conn, $_POST['days']);

    // if(errExits == 0){
      $sqlInsert = "insert into docreq (dname, days, vhour, hname)
          values('$dname', '$days','$vhour','$hname');";

          mysqli_query($conn, $sqlInsert);
          // $regSuccessful = "Registration  successful";
    }

// }

 ?>
<!doctype html>
<html lang="en">
  <head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


    <title>View Appoinment</title>
  </head>
  <body>
<style>

body {
  background-image: url('reg.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>


    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 m-auto ">
            <div class="card">


    <h5 class="card-header bg-info text-white"><b>Update personal schedule</b></h5>
    <div class="card-body">

      <form name="myForm" class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">


<h3 style="color:green;"><?php echo $regSuccessful; ?></h3>
        <div class="form-group">
          <label for="exampleInputEmail1"><b>Doctor</b></label>
          <input type="text"name="dname"class="form-control" placeholder="write your name" >
          <?php


          if(isset($_GET['err'])){ ?>
          <div class="alert alert-danger" role="alert">
              <?php echo $_GET['err']; ?>
</div>
              <?php
              }

               ?>

        </div>
<br><br>
     
 

<strong>Days</strong>
<select size="1" name="days">
<option value="01" label="Saturday"></option>
<option value="02" label="Sunday">Feb</option>
<option value="03" label="Monday">March</option>
<option value="04" label="Tuesday">April</option>
<option value="05" label="Wednesday">May</option>
<option value="06" label="Thursday">June</option>
<option value="07" label="home">home</option>
 

 <br><br>

 

 

<!-- ...
</select>

 

Year <select size="1" name="year">
...

<option value="2015" label="2015">2015</option>
<option value="2016" label="2016">2016</option>
<option value="2017" label="2017">2017</option>
<option value="2018" label="2018">2018</option>
<option value="2019" label="2019">2019</option>
<option value="2020" label="2020">2020</option>
<option value="2021" label="2021">2021</option>
...
</select>

 

</div> -->

 

<br><br>


        <div class="form-group">
          <label for="exampleInputEmail1"><b>Visiting hour start</b></label>
          <input type="text"name="vhour"class="form-control" placeholder="time" >
          <?php


          if(isset($_GET['err'])){ ?>
          <div class="alert alert-danger" role="alert">
              <?php echo $_GET['err']; ?>
</div>
              <?php
              }

               ?>

        </div>

        <br><br>


        <div class="form-group">
          <label for="exampleInputEmail1"><b>Hospital name</b></label>
          <input type="text"name="hname"class="form-control" placeholder="input number" >
          <?php


          if(isset($_GET['err'])){ ?>
          <div class="alert alert-danger" role="alert">
              <?php echo $_GET['err']; ?>
</div>
              <?php
              }

               ?>

        </div>

          










      <?php if(isset($_GET['primary'])){ ?>
      <div class="alert alert-primary" role="alert">
         <strong><?= $_GET['primary'];?></strong>
      </div>

    <?php } ?>

<!-- 
      <button type="submit" class="btn-warning"><b>Submit</b></button> -->
      <input type="submit" name="submit" value="Submit"> 
      
      </form>

  </div>

          </div>

        </div>

      </div>

      </div>
      </div>
    </section>


<script>
    var signupForm = document.forms.myForm;
    signupForm.onsubmit = function(){
      var dname = signupForm.dname.value;
      var vhour = signupForm.vhour.value;
      var hname = signupForm.hname.value;
      
      console.log("jname");
      if(dname=="")
      {
        alert("Doctor Name must be filled out!");
        return false;
      }
      if(vhour=="")
      {
        alert("Hour must be filled out!");
        return false;
      }
      if(hname=="")
      {
        alert("Hospital must be filled out!");
        return false;
      }
      
    }
    </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


    <script >
  function myFunction() {
var x = document.getElementById("myInput");
if (x.type === "password") {
  x.type = "text";
} else {
  x.type = "password";
}
}

  </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
  <a href="/D/Doctor/index.php"> Click here to go to the Dashboard.</a>

</html>


