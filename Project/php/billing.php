<?php

//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "textile";

// Create connection

      $connection=mysqli_connect("localhost","root","","textile");
	  
	  if ($connection==false)  
	    {
      die("Connection failed: ". mysqli_connect_error());
	    }
        
       $fullname=$_POST['fullname']; 
       $email=$_POST['email'];
       $contactno=$_POST['contactno'];
       $city=$_POST['city'];
       $address=$_POST['address'];
       $paymentmethod=$_POST['paymentmethod'];
       $comment=$_POST['comment'];

   $sql = "INSERT INTO billing(fullname,email,contactno,city,address,paymentmethod,comment)
   VALUES ('$fullname','$email','$contactno','$city','$address','$paymentmethod','$comment')";



if (mysqli_query($connection,$sql)) 
{
  echo "New record created successfully";
} 
else 
{
  echo "Error : ". mysqli_error($connection);
}

		mysqli_close($connection);


?>