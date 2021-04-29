<?php
include './header.php';
include './footer.php';
include './sidemenu.php';
?>

<html>
<head>
<title>Student Registration Form</title>

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
<h1 style="margin-left:200px; margin-top:20px;">STUDENT REGISTRATION</h1>

<form action="" method="post">
<div style="margin-left:550px; margin-top:50px;">
<table align="center" cellpadding = "50">
 
<!----- Student Name ---------------------------------------------------------->
<tr>
<td>Student Name</td>
<td><input type="text" name="Student_name" maxlength="30" required/>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Regd. No ---------------------------------------------------------->
<tr>
<td>Regd No.</td>
<td><input type="text" name="Regd_no" maxlength="30"/>
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
 

 
<!----- Program ---------------------------------------------------------->
<tr>
<td>Program</td>
<td><input type="text" name="Program" maxlength="30" />
</td>
</tr>
 
<!----- Branch ---------------------------------------------------------->
<tr>
<td>Branch</td>
<td><input type="text" name="Branch" maxlength="6" />
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
