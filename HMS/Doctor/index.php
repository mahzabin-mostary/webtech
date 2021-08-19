<?php  
session_start();
 
if(!isset($_SESSION['username']))
{
    header('location:doctorlogin.php');
}
?>

<html>
<head>
 <title>Dashboard</title>
</head>

 

<body>
<table border="1" width="100%" cellspacing="0">

 

<tr height="80px">

 

     <td align="left">
<img src="Image/p.jpg"  width="170" height="80"> </td>

 


<td align="right">
<a href="../Logout.php">Logout</a>
</td>
</tr>

 

<tr height="200px">

 

<td width="20%" >
<li></li>
<hr width="90%">
<ul>
<p>Dashboard </p>

 


<li><a href="profile.php">Check profile</a><br><br>
<li><a href="update registration.php">update registration </a><br><br>
<li><a href="Update personal schedule.php">Update personal schedule </a><br><br>

<li><a href="Appointment.php"> Appointment</a><br><br>
<li><a href="All Patients Details.php">Appointment Details</a><br><br>
<li><a href="patients Appointment history.php"> Appointment history</a><br><br>
	<li><a href="personal schedule history.php">Update personal schedule </a><br><br>
		  <!-- <li><a href="patients review.php">patients review</a><br><br> -->

    <li><a href="Check salary.html">Check salary</a><br><br>
      <li><a href="Request for leave of absence.php">Request for leave of absence</a><br><br>

 

 

<br>
</ul>
</td>
<td>
                <h2>
                        Hospital managment system
                <qw/h2>
                                <h2></h2>
<img src="reg.jpg"  width="1000" height="400">
            </td>
</tr>
