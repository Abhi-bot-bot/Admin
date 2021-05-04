<?php
include 'dbcon.php';

$name = $_POST["name"];
$regdno = $_POST["regdno"];
$emailid = $_POST["emailid"];
$phone = $_POST["phone"];
$program= $_POST["program"];
$branch = $_POST["branch"];
$pass = $_POST["pass"];
$gender = $_POST["gender"];
$dob = $_POST["dob"];
// echo $uname;
// $pass = $_POST["pass"];
$query = "insert into student_registration (Name , regd, email, phone, program, branch, password, gender, dob) values ('$name', '$regdno', '$emailid','$phone', '$program', '$branch', '$pass', '$gender', '$dob')";
// echo $query;
// die();
mysqli_query($conn,$query);

    header("location:student.php");

?>