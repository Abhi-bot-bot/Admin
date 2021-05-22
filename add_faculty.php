<?php
include 'dbcon.php';

$name = $_POST["name"];
$empid = $_POST["empid"];
$pass = $_POST["pass"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$designation = $_POST["designation"];
$subteacher = $_POST["subteacher"];

$gender = $_POST["gender"];
$dob = $_POST["dob"];
// echo $uname;
// $pass = $_POST["pass"];
$query = "insert into faculty_registration (empname , empid, pass, email, phone, designation, teaching, gender, dob) values ('$name', '$empid', '$pass','$email' ,'$phone', '$designation' , '$subteacher' , '$gender', '$dob')";
// echo $query;
// die();
mysqli_query($conn,$query);

    header("location:faculty.php");

?>