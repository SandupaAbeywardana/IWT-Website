<?php include_once 'config.php'; ?>

 <?php 

$first_Name = $_POST["first_name"];
$email = $_POST["email"];
$country = $_POST["Country"];
$phone_Number = $_POST["phone_number"];
$message = $_POST["message"];
	
	
 
	$SQL = "insert into contactus(FIRST_NAME,EMAIL,COUNTRY,PHONE_NUMBER,MESSAGE)values('$first_Name','$email','$country','$phone_Number','$message')";
	
	
	if(mysqli_query($conn,$SQL)){
		echo "<script>alert ('Your message sent successful')</script>";
        echo('<script>window.location.replace("../HTML/contact.html");</script>');
	}
	else{
		echo "<script>alert ('Your Data Not Submited')</script>";
	}
	
	mysqli_close($conn);
	
 ?>