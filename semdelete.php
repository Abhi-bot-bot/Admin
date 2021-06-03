<?php 
include 'dbcon.php';
$id = $_GET['id'];
$query="delete from semester where sr=$id";

mysqli_query($conn,$query);

header("location:semester.php");
  
?>