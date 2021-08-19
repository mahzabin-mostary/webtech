<!Doctype html>
<html>
<head>
<title></title>
<link rel="stylesheet"  Type="text/css"  href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

<script
  src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
  integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
  crossorigin="anonymous"></script>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" ></script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/fontawesome.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-info bg-info"> 
    <h5 class="text-white">Hospital Management System </h5>

<div class="mr-auto"></div>
<ul  class="navbar-nav">

<?php
if(isset($_SESSION['admin'])){
    $user=$_SESSION['admin'];

echo '
<li class="nav-item"><a href="#" class="nav-link text-white">'.$user.'</a></li>
<li class="nav-item"><a href="logout.php" class="nav-link  text-white">logout</a></li>
';


}else{
    echo'
<li class="nav-item"><a href="adminlogin.php" class="nav-link text-white"> Admin</a></li>
<li class="nav-item"><a href="Doctor/DoctorLogin.php" class="nav-link text-white"> Doctor</a></li>
<li class="nav-item"><a href="patientlogin.php" class="nav-link  text-white">Patient</a></li>
';
}


?>


</ul>
</nav>

</body>
</html>