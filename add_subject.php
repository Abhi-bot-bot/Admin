<?php
include 'dbcon.php';

$subname = $_POST["subname"];
// echo $uname;
// $pass = $_POST["pass"];
$query = "insert into subject (subject , status, action) values ('$subname', 'OK', 'active')";
 mysqli_query($conn,$query);

    header("location:subject.php");

?>