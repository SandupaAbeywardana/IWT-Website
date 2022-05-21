


<?php include_once 'config.php'; ?>

 <?php 

$first_Name = $_POST["fname"];
$last_Name = $_POST["lname"];
$email = $_POST["em"];
$password = $_POST["psw"];
$confirm_password = $_POST["cpsw"];
	
	
 
	$SQL = "insert into new_customers(First_Name,Last_Name,Email,Password,Confirm_Password)values('$first_Name','$last_Name','$email','$password','$confirm_password')";
	
	
	if(mysqli_query($conn,$SQL)){
		echo "<script>alert ('Your Data Submited')</script>";
	}
	else{
		echo "<script>alert ('Your Data Not Submited 222')</script>";
	}
	
	mysqli_close($conn);
	
 ?>