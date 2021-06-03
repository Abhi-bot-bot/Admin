
<?php 
include 'dbcon.php';
$id = $_GET['id'];
$query="delete from branch where sr=$id";

mysqli_query($conn,$query);

header("location:branch.php");
  
?>