<?php
include 'dbcon.php';

$pname = $_POST["pname"];
// echo $uname;
// $pass = $_POST["pass"];
$query = "insert into program (programname , status, action) values ('$pname', 'OK', 'active')";
 mysqli_query($conn,$query);

    header("location:program.php");

?>