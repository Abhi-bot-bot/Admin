<?php
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
  <!-- HEADER SECTION-->
        <div class="header">
           
            <img src="images/logo.jpg" alt="" width="90px" height="90px" style="margin-top: 20px;">
            
            <div class="logo"><a href=""><img src="images/admin.png" alt="" width="40px" height="40px"><p>ADMIN</p></a></div>
            <div class="header-right"><h1>Gandhi Institute for Education and Technology</h1></div>
        </div>

  <!--Side Bar-->

        <div class="wrapper">
          <div class="sidebar">
              
              <ul>
                  <li><a href="dashboard.php">Dashboard</a></li>
                  <li>
                    <button class="dropdown-btn">Master Management</button>
                    <div class="dropdown-container">
                      <a href="program.php">Program</a>
                      <a href="branch.php">Branch</a>
                      <a href="session.php">Session</a>
                      <a href="section.php">Section</a>
                      <a href="subject.php">Subject</a>
                    </div>
                  </li>
                  <li><a href="#">Time Table</a></li>
                  <li><a href="#">Notification</a></li>
                  <li><a href="#">Examination</a></li>
                  <li><a href="#">Assesment</a></li>
                  <li><a href="#">Attendence</a></li>
                  <li><a href="#">Report</a></li>


                  <li><a href="index.html">Logout</a></li>
              </ul> 
              
          </div>
          
          </div>
      </div>

<!--Footer-->

    <div class="footer">
        <p>Footer</p>
    </div>




      <script>
        
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;
        
        for (i = 0; i < dropdown.length; i++) {
          dropdown[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var dropdownContent = this.nextElementSibling;
          if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
          } else {
          dropdownContent.style.display = "block";
          }
          });
        }
        </script>
   
</body>
</html> 