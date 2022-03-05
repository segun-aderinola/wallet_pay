<?php
include_once('connection.php');

if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$father_name=$_POST['father_name'];
	$cnic=$_POST['cnic'];
	$state=strtolower($_POST['state']);
	$lga=strtolower($_POST['lga']);
	$city=strtolower($_POST['city']);
	$email=strtolower($_POST['email']);
	$phone=$_POST['phone'];
	$region=$_POST['region'];
	$password = '123456';
	$sqll="SELECT cnic FROM employee WHERE cnic = '$cnic'";
         $ress=mysqli_query($conn,$sqll);
         if(mysqli_num_rows($ress)>0){
            $error='This Staff ID is already register, enter another Staff ID';
            header("location:admin.php?error=$error");
        exit();
         }
         
		$sqll1="SELECT email FROM employee WHERE email='$email'";
         $ress1=mysqli_query($conn,$sqll1);
         if(mysqli_num_rows($ress1)>0){
            $error='This email is already register, enter another email';
            header("location:admin.php?error=$error");
         exit();
         }
         
		if(empty($name) || !preg_match("/^[a-zA-Z\s]+$/",$name)){
			$error='Please fill  the field  Name.Name must contain alphabet ';
			header("location:admin.php?error=$error");
		exit();
	}
	if(empty($father_name) || !preg_match("/^[a-zA-Z\s]+$/",$father_name)){
		$error='Please fill  the field  Father Name. Father Name must contain alphabet ';
		header("location:admin.php?error=$error");
		exit();
	}
	if(empty($cnic) || !preg_match("/^[1-6]{1}\d{4}[\-]\d{7}[\-]\d{1}$/",$cnic))
	{
		$error='Please fill  the field  Staff ID.Staff ID must contain 12203-4449404-1 this format ';
		header("location:admin.php?error=$error");
		exit();
	}
	
	if (!empty($email) &&!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  		$error = "Invalid email format"; 
  		header("location:admin.php?error=$error");
		exit();
}
	if(empty($phone))
	{
		$error='Please fill  the field Phone. Phone No must contain 09012345678 format';
		header("location:admin.php?error=$error");
		exit();
	}
	
		$sql = "INSERT INTO employee (`name`, `father_name`,`cnic`,`state`,`lga`,`city`, `email`,`phone`,`password`,`region`) VALUES ('$name', '$father_name', '$cnic','$state','$lga','$city', '$email','$phone','$password','$region')";

if (mysqli_query($conn, $sql)) {
	//  include_once('PHPMailer/index.php');
    echo "New record created successfully.......<br>";
    echo "<script>alert('New record inserted')</script>";
    header("refresh:0;url='admin.php'");
} else {
    echo "Error: "."<br>" . mysqli_error($conn);
    echo "<script>alert('fill all field')</script>";
   header("refresh:1;url='admin.php'");
}

}







?>




