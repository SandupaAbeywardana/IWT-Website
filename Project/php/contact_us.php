<?php include_once 'config.php'; ?>

 <?php 

$first_Name = $_POST["first name"];
$email = $_POST["email"];
$country = $_POST["Country"];
$phone_Number = $_POST["phone number"];
$message = $_POST["message"];
	
	
 
	$SQL = "insert into contact_us(FIRST_NAME,EMAIL,COUNTRY	,PHONE_NUMBER,MESSAGE)values('$first_Name','$email','$country','$phone_Number','$message')";
	
	
	if(mysqli_query($conn,$SQL)){
		echo "<script>alert ('Your Data Submited')</script>";
	}
	else{
		echo "<script>alert ('Your Data Not Submited 222')</script>";
	}
	
	mysqli_close($conn);
	
 ?>