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

<form action="" method="post">
<div style="margin-left:550px; margin-top:50px;">
<table align="center" cellpadding = "50">
 
<!----- Employee Name ---------------------------------------------------------->
<tr>
<td>Employee Name</td>
<td><input type="text" name="Employee_name" maxlength="30" required/>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Employement ID ---------------------------------------------------------->
<tr>
<td>Employement ID</td>
<td><input type="text" name="Employement_id" maxlength="30"/>
</td>
</tr>
 
<!----- Date Of Birth -------------------------------------------------------->
<tr>
<td>Date of Birth</td>
<td><input type="date" ></td>
 
<!----- Email Id ---------------------------------------------------------->
<tr>
<td>Email Id</td>
<td><input type="text" name="Email_Id" maxlength="100" /></td>
</tr>
 
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>Mobile Number</td>
<td>
<input type="text" name="Mobile_Number" maxlength="10" />
(10 digit number)
</td>
</tr>
 
<!----- Gender ----------------------------------------------------------->
<tr>
<td>Gender</td>
<td>
Male <input type="radio" name="Gender" value="Male" />
Female <input type="radio" name="Gender" value="Female" />
Other <input type="radio" name="Gender" value="Other" />
</td>
</tr>
 

 
<!----- Designation ---------------------------------------------------------->
<tr>
<td>Designation</td>
<td><input type="text" name="Designation" maxlength="30" />
</td>
</tr>
 
<!----- Subject Teaching ---------------------------------------------------------->
<tr>
<td>Subject Teaching</td>
<td><input type="text" name="Subject_teaching" maxlength="6" />
</td>
</tr>
 
<!----- Password ---------------------------------------------------------->
<tr>
<td>Password</td>
<td><input type="password" name="Password" maxlength="30" />
</td>
</tr>

 
 <!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</td>
</tr>
</table>
 </div>
</form>
 
</body>
</html>
