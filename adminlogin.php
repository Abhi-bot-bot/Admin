<?php
include 'dbcon.php';

$uname = $_POST["uname"];
// echo $uname;
$pass = $_POST["pass"];
$query = "select * from adminlogin where username = '".$uname."' and password = '".$pass."'";
$result = mysqli_query($conn,$query);
if (mysqli_num_rows($result) > 0) {
     echo "Success";
    header("location:dashboard.php");
}else {
    echo "Failed";
    header("location:index.html");
}
?>