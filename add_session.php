<?php
include 'dbcon.php';

$sname = $_POST["sname"];
// echo $uname;
// $pass = $_POST["pass"];
$query = "insert into session (year , status, action) values ('$sname', 'OK', 'active')";
 mysqli_query($conn,$query);

    header("location:session.php");

?>