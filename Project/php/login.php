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
        
       $email=$_POST['email']; 
       $password=$_POST['password'];


   $sql = "INSERT INTO login(email,password)
   VALUES ('$email','$password')";



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