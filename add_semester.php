<?php
include 'dbcon.php';

$semname = $_POST["semname"];
// echo $uname;
// $pass = $_POST["pass"];
$query = "insert into semester (semester , status, action) values ('$semname', 'OK', 'active')";
 mysqli_query($conn,$query);

    header("location:semester.php");

?>