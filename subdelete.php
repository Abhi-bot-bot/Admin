
<?php 
include 'dbcon.php';
$id = $_GET['id'];
$query="delete from subject where sr=$id";

mysqli_query($conn,$query);

header("location:subject.php");
  
?>