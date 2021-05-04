<?php
include 'dbcon.php';

$name = $_POST["notification"];
$context = $_POST["comment"];

// echo $uname;
// $pass = $_POST["pass"];
$query = "insert into notification (name , context) values ('$name', '$context')";
// echo $query;
// die();
mysqli_query($conn,$query);

    header("location:notification.php");

?>