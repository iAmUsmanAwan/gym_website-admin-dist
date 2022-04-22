<?php 
include 'header.php';
include 'dbconnection/dbconnection.php';
 $id = $_GET['id'];
 $query  = "DELETE FROM `users` WHERE id=$id"; 
 mysqli_query($con,$query);
 header('location:index.php');
 exit()

  ?>