<?php
include_once('../connection.php');
$update_id=$_GET['edit_id'];

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
	$password=rand(10000,99999);

	if (!empty($name)||!empty($father)||!empty($cnic)||!empty($state)||!empty($phone)||!empty($password)) {
		$sql = "UPDATE employee SET name='$name',father_name='$father_name',cnic='$cnic',`state`='$state', `lga`='$lga',city='$city',email='$email',phone='$phone',`password`='$password' WHERE id='$update_id'";

if (mysqli_query($conn, $sql)) {
    echo "record Updated successfully.......<br>";
    echo "<script>alert('record updated')</script>";
    header("refresh:3;url='../employee.php'");
} else {
    echo "Error: "."<br>" . mysqli_error($conn);
    echo "<script>alert('fill all field')</script>";
    header("refresh:3;url='../employee.php'");
}
}

		
	
	else
	{
		echo "Please enter all field";
	}

}











?>