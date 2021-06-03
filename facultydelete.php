
<?php 
include 'dbcon.php';
$id = $_GET['id'];
$query="delete from faculty_registration where sr=$id";

mysqli_query($conn,$query);

header("location:faculty.php");
  
?>