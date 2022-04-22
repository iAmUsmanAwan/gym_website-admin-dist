<?php 
include 'header.php';
include 'dbconnection/dbconnection.php';
 $id = $_GET['id'];
 $query  = "DELETE FROM `schedules` WHERE id=$id"; 
 mysqli_query($con,$query);
 header('location:schedule.php');
 exit()

  ?>