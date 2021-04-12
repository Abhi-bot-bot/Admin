<html>
<head>
<link rel="stylesheet" href="css/dashboard.css">

</head>
<body>
    
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
                  <li><a href="student.php">Student Registration</a></li>
                  <li><a href="faculty.php">Faculty Registration</a></li>
                  <li><a href="timetable.php">Time Table</a></li>
                  <li><a href="notification.php">Notification</a></li>
                  <li><a href="#">Examination</a></li>
                  <li><a href="#">Assesment</a></li>
                  <li><a href="#">Attendence</a></li>
                  <li><a href="#">Report</a></li>

                  <li><a href="index.html">Logout</a></li>
              </ul> 
              
          </div>
          
          </div>
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