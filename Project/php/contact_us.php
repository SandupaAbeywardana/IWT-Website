<?php include_once 'config.php'; ?>

 <?php 

$first_name = $_POST["first_name"];
$email = $_POST["email"];
$country = $_POST["Country"];
$phone_number = $_POST["phone_number"];
$message = $_POST["message"];
	
	
 
	$SQL = "insert into contactus(FIRST_NAME,EMAIL,COUNTRY	,PHONE_NUMBER,MESSAGE)values('$first_name','$email','$country','$phone_number','$message')";
	
	
	if(mysqli_query($conn,$SQL)){
		echo "<script>alert ('Your Data Submited')</script>";
		echo "<script>window.location.replace('admin_contactUsPage.php');</script>";
	}
	else{
		echo "<script>alert ('Your Data Not Submited 222')</script>";
	}
	
	mysqli_close($conn);
	
 ?>