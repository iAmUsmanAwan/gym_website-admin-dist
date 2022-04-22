<?php 
include 'header.php';
include 'dbconnection/dbconnection.php';
 $id = $_GET['id'];
 $query  = "DELETE FROM `trainers` WHERE id=$id"; 
 mysqli_query($con,$query);
 header('location:trainer.php');
 exit()

  ?>