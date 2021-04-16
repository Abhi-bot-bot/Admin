<?php
include 'dbcon.php';

$secname = $_POST["secname"];
// echo $uname;
// $pass = $_POST["pass"];
$query = "insert into section (section , status, action) values ('$secname', 'OK', 'active')";
 mysqli_query($conn,$query);

    header("location:section.php");

?>