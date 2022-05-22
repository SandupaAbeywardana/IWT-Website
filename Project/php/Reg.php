


<?php include_once 'config.php'; ?>

 <?php 

$first_Name = $_POST["fname"];
$last_Name = $_POST["lname"];
$email = $_POST["em"];
$acc_type = $_POST["accType"];
$password = $_POST["psw"];
$confirm_password = $_POST["cpsw"];
	
	
 
	$SQL = "insert into new_customers(First_Name,Last_Name,Email,Acc_Type,Password,Confirm_Password)values('$first_Name','$last_Name','$email','$acc_type','$password','$confirm_password')";
	
	
	if(mysqli_query($conn,$SQL)){
		echo "<script type='text/javascript'>alert('Successfully registered')</script>";
        echo('<script>window.location.replace("../HTML/login.html");</script>');
	}
	else{
		echo "<script>alert ('Registration unsuccessful.<br>')</script>";
	}
	
	mysqli_close($conn);
	
 ?>