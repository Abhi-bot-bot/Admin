<?php
include './header.php';
include './footer.php';
include './sidemenu.php';
include 'dbcon.php';
?>
<!DOCTYPE html>
<html>
<head>
<!-- Table-->
	<style type="text/css">
	 table.center {
  margin-left: auto; 
  margin-right: auto;
  margin-top: 160px
}
	</style>

<!-- Popup window-->
	<style>	
.popup .overlay {
  position:fixed;
  top:0px;
  left:0px;
  width:100vw;
  height:100vh;
  background:rgba(0,0,0,0.7);
  z-index:1;
  display:none;
}
 
.popup .content {
  position:absolute;
  top:30%;
  left:50%;
  transform:translate(-50%,-50%) scale(0);
  background:#fff;
  width:700px;
  height:350px;
  z-index:2;
  text-align:center;
  padding:20px;
  box-sizing:border-box;
  font-family:"Open Sans",sans-serif;
}
 
.popup .close-btn {
  cursor:pointer;
  position:absolute;
  right:20px;
  top:20px;
  width:30px;
  height:30px;
  background:#222;
  color:#fff;
  font-size:25px;
  font-weight:600;
  line-height:30px;
  text-align:center;
  border-radius:50%;
}
 
.popup.active .overlay {
  display:block;
}
 
.popup.active .content {
  transition:all 300ms ease-in-out;
  transform:translate(-50%,-50%) scale(1);
}
	</style>

<!-- Button-->	
	<style>
.button {
  border: 2;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: blink;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  position:absolute;
     top:0;
     right:0;
    margin: 200px 12px 75px 300px;
}
.button1 {background-color: #4CAF50;} /* Green */
</style>

<!-- Button2-->
<style>
.button2 {
  border: 1;
  color: white;
  padding: 5px 3px;
  text-align: center;
  text-decoration: blink;
  display: inline-block;
  font-size: 18px;
  cursor: pointer;
    margin: 150px 190px 140px 150px;

}

</style>
</head>
<body>
<form name='addstudent' action='add_student.php' method='post'>
	<div class="popup" id="popup-1">
  <div class="overlay"></div>
  <div class="content">
    <div class="close-btn" onclick="togglePopup()">&times;</div>
    <h1>Add New Program</h1>
    <div class="data">
    	<table align="center" cellpadding = "50">
 
 <!----- Student Name ---------------------------------------------------------->
 <tr>
 <td>Student Name</td>
 <td><input type="text" name="name" maxlength="30" required/>
 (max 30 characters a-z and A-Z)
 </td>
 </tr>
 
 <!----- Regd. No ---------------------------------------------------------->
 <tr>
 <td>Regd No.</td>
 <td><input type="text" name="regdno" maxlength="30" required/>
 </td>
 </tr>
 
 <!----- Date Of Birth -------------------------------------------------------->
 <tr>
 <td>Date of Birth</td>
 <td><input type="date" name="dob" required></td>
 
 <!----- Email Id ---------------------------------------------------------->
 <tr>
 <td>Email Id</td>
 <td><input type="text" name="emailid" maxlength="100" required/></td>
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
 

 
 <!----- Program ---------------------------------------------------------->
 <tr>
 <td>Program</td>
 <td><input type="text" name="program" maxlength="30" required/>
 </td>
 </tr>
 
 <!----- Branch ---------------------------------------------------------->
 <tr>
 <td>Branch</td>
 <td><input type="text" name="branch" maxlength="6" required/>
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
    
  </div>
</div>
</form>

<button class="button button1" onclick="togglePopup()" style="width: 180px">+ Add New</button>

<script>
	function togglePopup(){
  document.getElementById("popup-1").classList.toggle("active");
}
</script>

<h1 style="margin-left:200px; margin-top:20px;" >STUDENT REGISTRATION</h1>

<table border="7" cellpadding="15" style="width:70%" class="center">
	<tr>
		<th>Sr.No</th>
		<th>Student Name</th>
		<th>Regd No.</th>
		<th>EmailId</th>
    <th>Phone No.</th>
    <th>Program</th>
    <th>Branch</th>
    <th>Password</th>
    <th>Gender</th>
    <th>DOB</th>
	</tr>

<?php 
$query="select * from student_registration";

if ($result = mysqli_query($conn, $query)) {
  $count=1;
  while ($row = mysqli_fetch_row($result)) {
    
    ?>
<tr>
		<td style="text-align: center;"><?php echo $count;?></td>
		<td style="text-align: center;"><?php echo $row[1];?></td>
		<td style="text-align: center;"><?php echo $row[2];?></td>
    <td style="text-align: center;"><?php echo $row[3];?></td>
    <td style="text-align: center;"><?php echo $row[4];?></td>
    <td style="text-align: center;"><?php echo $row[5];?></td>
    <td style="text-align: center;"><?php echo $row[6];?></td>
    <td style="text-align: center;"><?php echo $row[7];?></td>
    <td style="text-align: center;"><?php echo $row[8];?></td>
    <td style="text-align: center;"><?php echo $row[9];?></td>
		
	</tr>

    <?php
    $count= $count+1;
  }
  
}
?>

	

	
</table>

</body>
</html>