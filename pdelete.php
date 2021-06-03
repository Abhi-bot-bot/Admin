
<?php 
include 'dbcon.php';
$id = $_GET['id'];
$query="delete from program where sr=$id";

mysqli_query($conn,$query);

header("location:program.php");
  
?>