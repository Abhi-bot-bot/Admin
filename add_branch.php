<?php
include 'dbcon.php';

$bname = $_POST["bname"];
// echo $uname;
// $pass = $_POST["pass"];
$query = "insert into branch (branchname , status, action) values ('$bname', 'OK', 'active')";
 mysqli_query($conn,$query);

    header("location:branch.php");

?>