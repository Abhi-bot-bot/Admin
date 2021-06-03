
<?php 
include 'dbcon.php';
$id = $_GET['id'];
$query="delete from section where sr=$id";

mysqli_query($conn,$query);

header("location:section.php");
  
?>