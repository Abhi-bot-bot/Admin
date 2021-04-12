<?php
include './header.php';
include './footer.php';
include './sidemenu.php';
?>

<html>
<head>
</head>
<body> 
<h1 style="margin-left:200px; margin-top:20px;">STUDENT REGISTRATION</h1>

<form action="" method="post">
   <div style="text-align:center; margin-top:50px;">
        Student Name: <input type="text" name="name" required><br><br>
        Regd No.: <input type="text" name="name" required><br><br>
        Email_id: <input type="email" name="name" required><br><br>
        Phone Number: <input type="text" name="name" required><br><br>
        Program: <input type="text" name="name" required><br><br>
        Branch: <input type="text" name="name" required><br><br>
        Password: <input type="password" name="name" required><br><br>
        Gender:
                <input type="radio" name="gender" value="female">Female
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="other">Other
                <br><br>
        DOB: <input type="password" name="name" required><br><br>
        <input type="submit">
   </div>
</form>
</body>
</html>
