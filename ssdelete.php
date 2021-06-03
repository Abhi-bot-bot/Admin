
<?php 
include 'dbcon.php';
$id = $_GET['id'];
$query="delete from session where sr=$id";

mysqli_query($conn,$query);

header("location:session.php");
  
?>