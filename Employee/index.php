

<?php
include('emp_login.php'); 

// if(isset($_SESSION['login_user'])){
// header("location: employee.php");
// }
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Login Employee
	</title>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
 
  <link rel="stylesheet" type="text/css" href="employee_style.css">
    <script>
$(document).ready(function(){
	$('#cnic').mask('99999-9999999-9');
});
</script>

<style>
	.bg{
		
	background-image: url('../image/background3.jfif');
	background-repeat: no-repeat;
	background-size:contain;
	height: 50rem;
	}
	h2{
	background-color: green;
	text-transform: uppercase;
	color: white;
	font-weight: bold;
	text-align: center;
	padding-top: 20px;
	padding-bottom: 20px;
}
	
</style>
</head>	
<body>

       
<div class='container '>
<h2>Online Census Management System </h2>

<div class="row">
	<div class="col-md-6 bg">

	</div>

	<div class="col-md-6 form-container">

	<h2 class='text-center text-primary h2'>Staff Login</h2>

<form  method="post" action="index.php">
<div class='form-group'>
<label>Staff ID :</label>
<input  name="cnic" id='cnic' class="form-control" type="text" required pattern='[1-6]{1}[0-9]{4}[\-]\d{7}[\-]\d{1}'  maxlength="15" placeholder="Enter Staff ID with dash e.g 15302-0920943-3">
</div>
<div class='form-group'>
<label>Password :</label>
<input id="password" name="password" class='form-control' type="password" maxlength="16"  placeholder='Enter the Password' required>
 
</div>

<input name="submit" class='form-control bg-warning text-success' type="submit" value="Login" style="background-color: green;color:white">

<span style="color:Red"><?php echo $error; ?></span>
</form>
<br><br>


</div>

</div>
</div>
</body>
</html>