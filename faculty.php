<?php
include './header.php';
include './footer.php';
include './sidemenu.php';
?>

<html>
<head>
<title>Faculty Registration Form</title>

</head>
<script>
h3{
  font-family: Calibri; 
  font-size: 25pt;         
  font-style: normal; 
  font-weight: bold; 
  color:SlateBlue;
  text-align: center; 
  text-decoration: underline
}

table{
  font-family: Calibri; 
  color:white; 
  font-size: 15pt; 
  font-style: normal;
  font-weight: bold;
  text-align:; 
  background-color: SlateBlue; 
  border-collapse: collapse; 
  border: 5px solid navy
}
table.inner{
  border: 0px
}
</script>
 
<body>
<h1 style="margin-left:200px; margin-top:20px;">FACULTY REGISTRATION</h1>

<form name="addfaculty" action="add_faculty.php" method="post">
<div style="margin-left:550px; margin-top:50px;">
<table align="center" cellpadding = "50">
 
<!----- Employee Name ---------------------------------------------------------->
<tr>
<td>Employee Name</td>
<td><input type="text" name="name" maxlength="30" required/>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Employement ID ---------------------------------------------------------->
<tr>
<td>Employement ID</td>
<td><input type="text" name="empid" maxlength="30" required/>
</td>
</tr>
 
<!----- Date Of Birth -------------------------------------------------------->
<tr>
<td>Date of Birth</td>
<td><input type="date" name="dob" required></td>
 
<!----- Email Id ---------------------------------------------------------->
<tr>
<td>Email Id</td>
<td><input type="text" name="email" maxlength="100" required/></td>
</tr>
 
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>Mobile Number</td>
<td>
<input type="text" name="phone" maxlength="10" required/>
(10 digit number)
</td>
</tr>
 
<!----- Gender ----------------------------------------------------------->
<tr>
<td>Gender</td>
<td>
Male <input type="radio" name="gender" value="Male" />
Female <input type="radio" name="gender" value="Female" />
Other <input type="radio" name="gender" value="Other" />
</td>
</tr>
 

 
<!----- Designation ---------------------------------------------------------->
<tr>
<td>Designation</td>
<td><input type="text" name="designation" maxlength="30" required/>
</td>
</tr>
 
<!----- Subject Teaching ---------------------------------------------------------->
<tr>
<td>Subject Teaching</td>
<td><input type="text" name="subteacher" maxlength="6" required/>
</td>
</tr>
 
<!----- Password ---------------------------------------------------------->
<tr>
<td>Password</td>
<td><input type="password" name="pass" maxlength="30" required/>
</td>
</tr>

 
 <!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">
<input type="submit" value="Save">
<input type="reset" value="Reset">
</td>
</tr>
</table>
 </div>
</form>
 
</body>
</html>
