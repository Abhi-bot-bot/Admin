<?php
include './header.php';
include './footer.php';
include './sidemenu.php';
?>

<html>
<head>
</head>
<body>
<h1 style="margin-left:200px; margin-top:20px;">TIME TABLE</h1>
    
    <div>
    <form action="">
        <h3 style="text-align:center; margin-top:150px">Program &nbsp;
         <input style="height:30px;" type="text" name="program" size="30" required>
         </h3>
         <h3 style="text-align:center; margin-top:50px">Branch &nbsp;
         <input style="height:30px;" type="text" name="program" size="30">
         </h3>
         <h3 style="text-align:center; margin-top:50px">Select an attachment: <input type="file" name="myfile"></h3><br><br>

          <div style="text-align:center; margin-top:20px">
          <input type="submit" name="submit">
          </div>  
         </form>
    </div>

</body>
  
</html>