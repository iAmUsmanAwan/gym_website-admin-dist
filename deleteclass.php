<?php 
include 'header.php';
include 'dbconnection/dbconnection.php';
 $id = $_GET['id'];
 $query  = "DELETE FROM `classes` WHERE id=$id"; 
 mysqli_query($con,$query);
 header('location:classes.php');
 exit()

  ?>