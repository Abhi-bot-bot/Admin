<?php
include './header.php';
include './footer.php';
include './sidemenu.php';
?>

<html>
<head>
</head>
<body>
<h1 style="margin-left:200px; margin-top:20px;">FACULTY REGISTRATION</h1>
<form action="" method="post">
   <div style="text-align:center; margin-top:50px;">
        Employee Name: <input type="text" name="name" required><br><br>
        Employement ID: <input type="text" name="name" required><br><br>
        Password: <input type="password" name="name" required><br><br>
        Email_id: <input type="email" name="name" required><br><br>
        Phone Number: <input type="text" name="name" required><br><br>
        Designation: <input type="text" name="name" required><br><br>
        Subject Teaching: <input type="text" name="name" required><br><br>
        
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
