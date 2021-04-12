<?php
include './header.php';
include './footer.php';
include './sidemenu.php';
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
  width:500px;
  height:250px;
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
.button2 {background-color: #4CAF50;} /* Green */
</style>
</head>
<body>
<form name="program">
	<div class="popup" id="popup-1">
  <div class="overlay"></div>
  <div class="content">
    <div class="close-btn" onclick="togglePopup()">&times;</div>
    <h1>Add New Program</h1>
    <div class="data">
    	<label>Program Name</label>
    	<input type="text" name="pname" required>

    </div>
    <div>
<button class="button button2" style="width: 90px">Save</button>
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

<h1 style="margin-left:200px; margin-top:20px;" >PROGRAM</h1>

<table border="7" cellpadding="15" style="width:70%" class="center">
	<tr>
		<th>Sr.No</th>
		<th>Program Name</th>
		<th>Status</th>
		<th>Action</th>
	</tr>

	<tr>
		<td style="text-align: center;">1</td>
		<td style="text-align: center;">M.Tech</td>
		<td style="text-align: center;">Active</td>
		<td style="text-align: center;">delete/Edit</td>
	</tr>

	<tr>
		<td style="text-align: center;">2</td>
		<td style="text-align: center;">BE</td>
		<td style="text-align: center;">Not Active</td>
		<td style="text-align: center;">delete/Edit</td>
	</tr>

	<tr>
		<td style="text-align: center;">3</td>
		<td style="text-align: center;">B.Tech</td>
		<td style="text-align: center;">Active</td>
		<td style="text-align: center;">delete/Edit</td>
	</tr>

	<tr>
		<td style="text-align: center;">4</td>
		<td style="text-align: center;">BCA</td>
		<td style="text-align: center;">Active</td>
		<td style="text-align: center;">delete/Edit</td>
	</tr>

	<tr>
		<td style="text-align: center;">5</td>
		<td style="text-align: center;">MCA</td>
		<td style="text-align: center;">Active</td>
		<td style="text-align: center;">delete/Edit</td>
	</tr>

</table>

</body>
</html>