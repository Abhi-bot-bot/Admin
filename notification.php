<?php
include './header.php';
include './footer.php';
include './sidemenu.php';
?>

<html>
<head>
</head>
<body>
<h1 style="margin-left:200px; margin-top:20px;">NOTIFICATION</h1>
<form name="addnotification" action="add_notification.php" method="post">
    <div style="text-align:center; margin-top:100px;">
    <h3>Notification Name : <input style="height:30px;" type="text" name="notification" required></h3>
        <br><br><br>
        <h3>Context: <textarea name="comment" rows="5" cols="40" required></textarea></h3>
        <br><br><br>
        <h3>Select an attachment: <input type="file" name="myfile"></h3><br><br>
        <input type="submit" name="submit" value="submit">
    </div> 
</form>
</body>
</html>